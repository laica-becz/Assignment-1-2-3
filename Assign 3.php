<?php
//Code Sequence
declare(strict_types=1); //Step 1

$ingredients = ['Almond Butter' => ['price' => 390.00, 'stock' => 10],
                'Cocoa Powder' => ['price' => 203.00, 'stock' => 5],
                'Maple Syrup' => ['price' => 200.00, 'stock' => 4],
                'Chocolate Frosting' => ['price' => 100.00, 'stock' => 7]
            ]; //Step 2
//Step 3
$tax_rate = 12; //12% VAT 

//Step 4
function get_reorder_message(int $stock_level): string {
    return $stock_level < 5 ? 'Yes' : 'No';
}

//Step 5
function get_total_value(float $price, int $quantity, int $tax_rate): float {
    return ($price * $quantity) * (1 + $tax_rate);
}

//Step 6
function get_tax_due(float $price, int $quantity, int $tax_rate): float {
    return ($price * $quantity) * ($tax_rate / 100);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Level (Inventory)</title>
</head>
<body>
  <?php require_once 'header.php'; ?>
  <main>
        <h1>No Bake Brownies - Ingredients Inventory</h1>
        <p><strong>Tax Rate: <?= $tax_rate ?>%</strong></p>
    <table> 
            <thead> 
                <tr> 
                    <th>Ingredient</th>
                    <th>Stock Level</th>
                    <th>Reorder</th>
                    <th>Total Value (₱)</th>
                    <th>Tax Due (₱)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ingredients as $ingredient => $data):
                ?>
                    <tr>
                        <td><?= $ingredient; ?></td>
                        <td><?= $data['stock']; ?></td>
                        <td class="<?= get_reorder_message($data['stock']) === 'Yes' ? 'reorder-yes' : 'reorder-no'; ?>">
                            <?= get_reorder_message($data['stock']); ?>
                        </td>
                        <td>₱<?= number_format(get_total_value($data['price'], $data['stock']), 2); ?></td>
                        <td>₱<?= number_format(get_tax_due($data['price'], $data['stock'], $tax_rate), 2); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="item-summary">
          <strong>Total Inventory Value </strong> ₱<?php
          $total_value = 0;
          foreach ($ingredients as $data) {
          $total_value += get_total_value($data['price'], $data['stock']);
          } echo number_format($total_value, 2);
          ?>
        </div>
        <div class="item-summary">
          <strong>Total Inventory Value (Including Tax): </strong> ₱<?php
          $total_tax = 0;
          foreach ($ingredients as $data) {
          $total_tax += get_tax_due($data['price'], $data['stock'], $tax_rate);
          } echo number_format($total_tax, 2);
          ?>
        </div>
        <div class="total">
          <strong>Total (Inventory + Tax): </strong> ₱<?= number_format($total_value + $total_tax, 2); ?>
            </div>
        </div>
    </main>
  <?php include 'footer.php'; ?>
</body>
</html>
