<?php
//Code Sequence
declare(strict_types=1); //Step 1

$ingredients = ['Almond Butter' => ['price' => 390.00, 'stock' => 10],
                'Cocoa Powder' => ['price' => 203.00, 'stock' => 5],
                'Maple Syrup' => ['price' => 200.00, 'stock' => 4],
                'Chocolate Frosting' => ['price' => 100.00, 'stock' => 7]
            ]; //Step 2
//Step 3
$tax_rate = 0.12; //12% VAT 

//Step 4
function get_reorder_message(int $stock_level): string {
    return $stock_level < 5 ? 'Yes' : 'No';
}
