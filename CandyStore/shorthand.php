<?php
$name = 'Ben';
$favorites = ['Chocolate', 'Toffee', 'Fudge'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shorthand Echo</title>
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
    <h2>Welcome <?= $name ?></h2>
    <p>Your favorite type of candy is: <?= $favorites[0] ?>.</p>
</body>
</html>
