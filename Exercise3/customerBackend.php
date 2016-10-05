<?php
//get the hat quantities
 $wHat = $_POST["wHat"];
 $bHat = $_POST["bHat"];
 $gHat = $_POST["gHat"];
//get user info
 $username = $_POST["username"];
 $password = $_POST["password"];
 //get shipping cost
 $shipping = $_POST["sMethod"];

 $orderTotal = 0;

 $orderTotal = $wHat*20 + $bHat*40 + $gHat*35 + $shipping;

if ($shipping == 0) {
  $shippingType = "Free 7 day";
}
else if ($shipping == 50) {
  $shippingType = "$50.00 over night";
}
else if ($shipping == 5) {
  $shippingType = "$5.00 three day";
}

echo'
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Receipt</title>
</head>
<body>';
echo '<h3>Welcome '. $username . ' your password is ' . $password;
//start the receipt table
echo '
<table id = "Receipt">
<tr>';
echo '<th>Item</th>';
echo '<th>Quantity</th>';
echo '<th>Cost Per Item</th>';
echo '<th>Sub Total</th>';
echo '</tr>';

//hat info
echo '<tr>';
echo '<td>White hat</td>';
echo '<td>'.$wHat.'</td>';
echo '<td> $20 </td>';
echo '<td>$'. $wHat * 20 . '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Black hat</td>';
echo '<td>'.$bHat.'</td>';
echo '<td> $40 </td>';
echo '<td>$'. $bHat * 40 . '</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Gray hat</td>';
echo '<td>'.$gHat.'</td>';
echo '<td> $35 </td>';
echo '<td>$'. $gHat * 35 . '</td>';
echo '</tr>';

//shipping info
echo '<tr>';
echo '<td>Shipping</td>';
echo '<td colspan = "2">' . $shippingType . '</td>';
echo '<td>$' . $shipping . '</td>';

echo '<tr>';
echo '<td colspan = "3">Total Cost</td>';
echo '<td>$'. $orderTotal .'</td>';
echo '</tr>';
echo '</table>';
echo'
</body>
</html>';
 ?>
