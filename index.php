<?php
$drinks = [
    "Latte" => 4.00,
    "Coffee" => 3.00,
    "Green Tea" => 2.50,
    "Cream Soda" => 3.50,
    "Egg Cream" => 5.00
];

$pastries = [
    "Honey Cake",
    "Coffee Cake",
    "Cinnamon Roll",
    "Hamentashen",
    "Mandelbrot"
];

$sandwiches = [
    "Turkey on Pumpernickel" => 7.00,
    "Tuna on Challah Roll" => 8.00,
    "Pastrami on Rye" => 9.00,
    "Potato Knish" => 6.00
];
?>

<h1>Welcome to The Loop Deli</h1>

<h3>Drinks!</h3>
<ul>
    <?php foreach ($drinks as $drink => $price) : ?>
        <li><?= "$drink: $$price" ?></li>
    <?php endforeach; ?>
</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
    <?php for ($i = 0; $i < count($pastries); $i++) : ?>
        <li><?= $pastries[$i] ?></li>
    <?php endfor; ?>
</ul>
<h3>Sandwiches!</h3>
<ul>
    <?php foreach ($sandwiches as $sandwich => $price) : ?>
        <li><?= "$sandwich: $$price" ?></li>
    <?php endforeach; ?>
</ul>
