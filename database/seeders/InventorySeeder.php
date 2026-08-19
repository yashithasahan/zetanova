<?php

namespace Database\Seeders;

use App\Models\InventoryItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Seed dummy Bouncy Castles (the ones currently hardcoded on the site)
        $bouncyCastles = [
            [
                'name' => 'Classic Bouncy Castle',
                'description' => 'The original — a standard 3×3 m bouncy castle in bright primary colours. Perfect for garden parties and indoor venues alike.',
                'quantity' => 2,
                'price' => 8500,
                'category' => 'Bouncy Castles',
            ],
            [
                'name' => 'Princess Castle',
                'description' => 'Pink towers, castle turrets, and princess arch entrance. Comes with a slide built in — royalty-approved.',
                'quantity' => 1,
                'price' => 9500,
                'category' => 'Bouncy Castles',
            ],
            [
                'name' => 'Adventure Combo',
                'description' => 'Climbing wall, slide, obstacle tunnel, and bounce zone in one unit. Great for mixed-age groups and energetic kids.',
                'quantity' => 1,
                'price' => 11000,
                'category' => 'Bouncy Castles',
            ],
            [
                'name' => 'Water Slide Combo',
                'description' => 'A full inflatable water slide with splash pool — the ultimate summer party centrepiece. Garden or poolside use.',
                'quantity' => 2,
                'price' => 13000,
                'category' => 'Bouncy Castles',
            ]
        ];

        foreach ($bouncyCastles as $castle) {
            InventoryItem::updateOrCreate(
                ['name' => $castle['name']],
                $castle
            );
        }

        // 2. Parse and seed the old JSON data
        $jsonPath = base_path('old_static/data/products.json');
        
        if (File::exists($jsonPath)) {
            $jsonContent = File::get($jsonPath);
            $products = json_decode($jsonContent, true);

            if ($products) {
                foreach ($products as $product) {
                    // Extract fields based on the old JSON format
                    $name = $product['Item Name'] ?? 'Unknown Item';
                    $price = $product['Unit Price '] ?? 0;
                    $category = $product['Category'] ?? 'Uncategorized';

                    // Insert or update
                    InventoryItem::updateOrCreate(
                        ['name' => $name],
                        [
                            'description' => '', // No description in the old JSON
                            'quantity' => 5, // Default quantity
                            'price' => floatval($price),
                            'category' => $category,
                        ]
                    );
                }
            }
        }
    }
}
