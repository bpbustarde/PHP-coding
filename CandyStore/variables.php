
<?php
$name = "Ben";
$price = 5;
$offers = [
    ["name" => "Toffee", "price" => 5, "stock" => 120],
    ["name" => "Mints", "price" => 3, "stock" => 66],
    ["name" => "Fudge", "price" => 4, "stock" => 97]
];
$nutrition = [
    "fat" => 36,
    "sugar" => 51,
    "salt" => 0.25,
    "fiber" => 2.1
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Santa's Candy</title>
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
    <h2>Welcome <?php echo $name; ?>!</h2>
    <p>
        The cost of your candy is
        $<?php echo $price; ?> per pack.
    </p>
    <hr>
    <h2>Offers</h2>

    <?php foreach ($offers as $candy) { ?>
        <p>
            <?php echo $candy["name"]; ?> -
            $<?php echo $candy["price"]; ?>
        </p>
    <?php } ?>

    <hr>
    <h2>Nutrition (per 100g)</h2>
    <p>Fat: <?php echo $nutrition["fat"]; ?>%</p>
    <p>Sugar: <?php echo $nutrition["sugar"]; ?>%</p>
    <p>Salt: <?php echo $nutrition["salt"]; ?>%</p>
    <p>Fiber: <?php echo $nutrition["fiber"]; ?>%</p>

</div>

</body>
</html>
