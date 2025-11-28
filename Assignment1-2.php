<?php
//variables
$product_name = "No Bake Brownies";
$prep_time = "5 mins";
$serving_size = 9;
$difficulty = "Easy"; 
$ratings = 5;
$price_per_piece: 30; //pesos
$freeze_time: 30; //minutes

//indexed array
$ingredients = ["1 cup almond butter", "1/2 cup maple syrup", "2/3 cup cocoa powder", "1 cup chocolate frosting"];
//associative array
$steps = ["step 1" => "Line a square pan with parchment paper and set aside.", "step 2" => "In a large mixing bowl, add your 
almond butter, maple syrup, and cocoa powder and mix well", "step 3" => "Transfer the batter into the lined pan and press down and smooth out.
Add your frosting on top and refrigerate it for at least 30 minutes.", "step 4" => "Remove the no bake brownies from the refrigerator
and slice and serve."];

//expression and operators
$cost = $price_per_piece * serving_size;

//type juggling
$total = $prep_time . " " . $serving_size;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to make no bake Brownies</title>
</head>
<body>
    <?php require_once 'header.php'; ?>
    <main>
        <h1><?= $product_name; ?></h1>
        <div class="information-box">
            <p>Preparation Time: <?= $prep_time; ?></p>
            <p>Chill Time: <?= $freeze_time; ?> minutes</p>
            <p>Serving size: <?= $serving_size; ?></p>
            <p>Difficulty: <?= $difficulty; ?></p>
            <p>Ratings: <?= $ratings; ?> stars</p>
        </div>
    </main>
</body>

</html>



