<?php
$items = 3;
$cost = 5;
$subtotal = $cost * $items;
$tax = ($subtotal / 100) * 12;
$total = $subtotal + $tax;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Expressions and Operators</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 30px;
        }

        .container {
            background-color: darkred;
            color: white;
            padding: 25px;
            max-width: 600px;
            margin: 10px auto;
            border-radius: 10px;
        }

        h1 {
            color: gold;
        }

        h2 {
            color: #ffcc66;
            margin-top: 25px;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
        }

        hr {
            border: 1px solid #aa5555;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Santa's Candy Store</h1>
    <hr>
    <h2>Shopping Cart</h2>
    <p>Items: <?= $items ?></p>
    <p>Cost per pack: $<?= $cost ?></p>
    <p>Subtotal: $<?= $subtotal ?></p>
    <p>Tax: $<?= $tax ?></p>
    <p><strong>Total: $<?= $total ?></strong></p>
</body>
</html>
