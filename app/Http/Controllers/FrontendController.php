<?php

namespace App\Http\Controllers;

use App\Models\InventoryItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FrontendController extends Controller
{
    private function getProductsData()
    {
        $items = InventoryItem::with('images')->get();
        return $items->map(function ($item) {
            return [
                'No' => $item->id,
                'Item Name' => $item->name,
                'Unit Price ' => $item->price,
                'Category' => $item->category,
                'Photo' => $item->images->first() ? Storage::url($item->images->first()->image_path) : null,
                'id' => $item->id,
            ];
        });
    }

    public function index()
    {
        $productsData = $this->getProductsData();
        return view('pages.index', compact('productsData'));
    }

    public function product($id)
    {
        $product = InventoryItem::with('images')->findOrFail($id);
        $related = InventoryItem::with('images')
            ->where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->limit(3)
            ->get();
        return view('pages.product', compact('product', 'related'));
    }

    public function partyConsole()
    {
        $productsData = $this->getProductsData();
        return view('pages.party-console', compact('productsData'));
    }

    public function bouncy()
    {
        $products = InventoryItem::with('images')->where('category', 'Bouncy Castles')->get();
        return view('pages.bouncy', compact('products'));
    }

    public function balloons()
    {
        $products = InventoryItem::where('category', 'Balloons')->get();
        return view('pages.balloons', compact('products'));
    }

    public function sound()
    {
        $products = InventoryItem::where('category', 'Sound Systems')->get();
        return view('pages.sound', compact('products'));
    }

    public function lighting()
    {
        $products = InventoryItem::where('category', 'Lighting')->get();
        return view('pages.lighting', compact('products'));
    }

    public function kids()
    {
        // Could be a mix or specific
        $products = InventoryItem::where('category', 'Kids')->get();
        return view('pages.kids', compact('products'));
    }

    public function birthdays()
    {
        $products = InventoryItem::where('category', 'Birthdays')->get();
        return view('pages.birthdays', compact('products'));
    }
}
