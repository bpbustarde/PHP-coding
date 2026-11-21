<?php
require_once 'header.php';

$customerName = "Ben";
$isMember = true;
$selectedDay = "Saturday";
$favorites = ["Chocolate", "Toffee", "Fudge"];

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

$items = 3;
$cost = 5;
$subtotal = $cost * $items;
$tax = ($subtotal / 100) * 12;
$total = $subtotal + $tax;

$bulkPriceString = "25";
$bulkPacks = 2;
$bulkTotal = $bulkPriceString * $bulkPacks;

echo "<h2>Welcome</h2>";
echo "<p>Hello, " . $customerName . "! Your favorite candy is " . $favorites[0] . ".</p>";
if ($isMember) {
    echo "<p>Member perk active: You get priority access to seasonal holiday treats.</p>";
}

echo "<h2>Cart & Promo Check</h2>";
if ($subtotal >= 15) {
    echo "<p>Your subtotal is $" . $subtotal . " — you qualify for a free sample pack!</p>";
} else {
    echo "<p>Your subtotal is $" . $subtotal . " — add more items to unlock a free sample pack.</p>";
}

echo "<h2>Order Tier</h2>";
if ($total >= 30) {
    echo "<p>Order Tier: Gold Bundle (Total: $" . $total . ")</p>";
} elseif ($total >= 15) {
    echo "<p>Order Tier: Silver Pack (Total: $" . $total . ")</p>";
} else {
    echo "<p>Order Tier: Standard Treat (Total: $" . $total . ")</p>";
}

echo "<h2>Daily Store Schedule</h2>";
switch ($selectedDay) {
    case "Monday":
        echo "<p>Monday: Fresh fudge batch coming out in the morning.</p>";
        break;
    case "Friday":
        echo "<p>Friday: Weekend mint and toffee bundles available.</p>";
        break;
    case "Saturday":
    case "Sunday":
        echo "<p>Weekend Special: Extended holiday hours all day.</p>";
        break;
    default:
        echo "<p>Regular weekday candy counter hours.</p>";
        break;
}

echo "<h2>Sugar Level Rating</h2>";
$sugarLevel = $nutrition["sugar"];
$sugarNote = match (true) {
    $sugarLevel >= 50 => "High sugar treat (51% per 100g)",
    $sugarLevel >= 25 => "Moderate sweetness",
    default => "Lightly sweet",
};
echo "<p>" . $sugarNote . "</p>";

echo "<h2>Shopping Cart</h2>";
echo "<p>Items: " . $items . "</p>";
echo "<p>Cost per pack: $" . $cost . "</p>";
echo "<p>Subtotal: $" . $subtotal . "</p>";
echo "<p>Tax (12%): $" . $tax . "</p>";
echo "<p><strong>Total: $" . $total . "</strong></p>";
echo "<p>Bulk order (" . $bulkPacks . " x $" . $bulkPriceString . " string juggled): $" . $bulkTotal . "</p>";

echo "<h2>Current Offers & Stock Status</h2>";
foreach ($offers as $candy) {
    $status = ($candy["stock"] > 100) ? "Well Stocked" : "Available";
    echo "<p>" . $candy["name"] . " - $" . $candy["price"] . " (" . $candy["stock"] . " in stock - " . $status . ")</p>";
}

echo "<h2>Gift Box Sizes</h2>";
for ($boxSize = 2; $boxSize <= 6; $boxSize += 2) {
    echo "<p>" . $boxSize . "-piece assorted candy box</p>";
}

echo "<h2>Bonus Voucher Counter</h2>";
$voucher = 1;
while ($voucher <= 3) {
    echo "<p>Voucher #" . $voucher . " valid for next visit</p>";
    $voucher++;
}

echo "<h2>Tasting Station</h2>";
$round = 1;
do {
    echo "<p>Tasting flight #" . $round . " ready</p>";
    $round++;
} while ($round <= 2);

echo "<h2>Nutrition (per 100g)</h2>";
echo "<p>Fat: " . $nutrition["fat"] . "%</p>";
echo "<p>Sugar: " . $nutrition["sugar"] . "%</p>";
echo "<p>Salt: " . $nutrition["salt"] . "%</p>";
echo "<p>Fiber: " . $nutrition["fiber"] . "%</p>";

include_once 'footer.php';
?>