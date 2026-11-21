<?php
$storeTitle = "Santa's Candy Store";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $storeTitle ?></title>
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
    <h1><?= $storeTitle ?></h1>
    <hr>