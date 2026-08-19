<?php

namespace App\Http\Controllers;

use App\Models\InventoryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = InventoryItem::query()->with('images');

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('category', 'like', "%{$search}%");
        }

        $items = $query->latest()->paginate(10);
        return view('inventory.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'category' => 'nullable|string|max:255',
            'images' => 'nullable|array|max:5',
            'images.*' => 'image|mimes:jpeg,png,jpg,webp|max:512',
        ]);

        $item = InventoryItem::create([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'quantity' => $validated['quantity'],
            'price' => $validated['price'],
            'category' => $validated['category'],
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $item->images()->create(['image_path' => $path]);
            }
        }

        return redirect()->route('inventory.index')->with('success', 'Product added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Not used currently
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryItem $inventory)
    {
        $inventory->load('images');
        return view('inventory.edit', compact('inventory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InventoryItem $inventory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'category' => 'nullable|string|max:255',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,webp|max:512',
        ]);

        $inventory->update([
            'name' => $validated['name'],
            'description' => $validated['description'],
            'quantity' => $validated['quantity'],
            'price' => $validated['price'],
            'category' => $validated['category'],
        ]);

        if ($request->hasFile('images')) {
            $currentImageCount = $inventory->images()->count();
            $newImagesCount = count($request->file('images'));
            
            if ($currentImageCount + $newImagesCount > 5) {
                return back()->withErrors(['images' => 'A product can have a maximum of 5 images. Please delete some existing images first.']);
            }

            // Store new images (Append instead of replace)
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $inventory->images()->create(['image_path' => $path]);
            }
        }

        return redirect()->route('inventory.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove a specific image.
     */
    public function destroyImage($imageId)
    {
        $image = \App\Models\ProductImage::findOrFail($imageId);
        Storage::disk('public')->delete($image->image_path);
        $image->delete();

        return back()->with('success', 'Image deleted successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryItem $inventory)
    {
        // Delete associated images from storage
        foreach ($inventory->images as $img) {
            Storage::disk('public')->delete($img->image_path);
        }
        
        $inventory->delete();
        return redirect()->route('inventory.index')->with('success', 'Product deleted successfully.');
    }
}
