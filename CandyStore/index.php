<?php
declare(strict_types=1);

$shop = "Santa's Candy Store";
$tax = 12;

$items = [
    "Toffee" => ["price" => 180, "qty" => 24, "batch" => "Holiday batch"],
    "Mints" => ["price" => 95, "qty" => 35, "batch" => "Classic tin"],
    "Fudge" => ["price" => 210, "qty" => 8, "batch" => "Small batch"],
    "Caramel Chews" => ["price" => 120, "qty" => 15, "batch" => "Wrapped pack"],
    "Peppermint Bark" => ["price" => 250, "qty" => 6, "batch" => "Seasonal"],
    "Gummy Bears" => ["price" => 110, "qty" => 40, "batch" => "Assorted"]
];

function get_reorder_message(int $stock): string {
    return ($stock < 10) ? "Yes" : "No";
}

function get_total_value(float $price, int $qty): float {
    return $price * $qty;
}

function get_tax_due(float $price, int $qty, int $rate = 0): float {
    $val = $price * $qty;
    return $val * ($rate / 100);
}

$sumQty = 0;
$sumValue = 0;
$sumTax = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $shop ?> - Stock Control</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #faf3f4;
            color: #2b191c;
            margin: 30px;
        }
        .box {
            max-width: 860px;
            margin: auto;
            background: #fff;
            padding: 24px;
            border: 1px solid #e5cbd0;
            border-radius: 6px;
        }
        h1 {
            color: #8b1e2b;
            margin-bottom: 4px;
        }
        .tag {
            font-size: 13px;
            color: #6e5257;
            margin-bottom: 18px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background: #8b1e2b;
            color: #fff;
            text-align: left;
            padding: 10px;
            font-size: 13px;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #eee0e3;
            font-size: 14px;
        }
        .note {
            display: block;
            font-size: 12px;
            color: #775c61;
        }
        .low {
            color: #9e1b24;
            font-weight: bold;
        }
        .ok {
            color: #2e6b3e;
        }
        .total-row td {
            font-weight: bold;
            background: #fdf6f7;
            border-top: 2px solid #d9b8be;
        }
    </style>
</head>
<body>
<div class="box">
    <h1><?= $shop ?></h1>
    <div class="tag">Stock Control &bull; Prices in PHP (&#8369;) &bull; Tax: <?= $tax ?>%</div>

    <table>
        <tr>
            <th>PRODUCT</th>
            <th>PRICE</th>
            <th>STOCK</th>
            <th>RE-ORDER</th>
            <th>TOTAL VALUE</th>
            <th>TAX DUE</th>
        </tr>
        <?php foreach ($items as $prod => $info): ?>
            <?php
            $p = (float)$info["price"];
            $q = (int)$info["qty"];
            $reorder = get_reorder_message($q);
            $val = get_total_value($p, $q);
            $due = get_tax_due($p, $q, $tax);

            $sumQty += $q;
            $sumValue += $val;
            $sumTax += $due;
            ?>
            <tr>
                <td>
                    <?= $prod ?>
                    <span class="note"><?= $info["batch"] ?></span>
                </td>
                <td>&#8369;<?= number_format($p, 2) ?></td>
                <td><?= $q ?></td>
                <td class="<?= ($reorder === "Yes") ? "low" : "ok" ?>"><?= $reorder ?></td>
                <td>&#8369;<?= number_format($val, 2) ?></td>
                <td>&#8369;<?= number_format($due, 2) ?></td>
            </tr>
        <?php endforeach; ?>
        <tr class="total-row">
            <td>Total (<?= count($items) ?> items)</td>
            <td>-</td>
            <td><?= $sumQty ?></td>
            <td>-</td>
            <td>&#8369;<?= number_format($sumValue, 2) ?></td>
            <td>&#8369;<?= number_format($sumTax, 2) ?></td>
        </tr>
    </table>
</div>
</body>
</html>