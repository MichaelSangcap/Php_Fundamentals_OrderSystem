<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {text-align: center;}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
</head>
<body>

</body>
</html>

<?php

if(isset($_GET['submitname'])){
  // Declaring variables and their values for the inputs provided by the user in index.php. The data were retrieved from another PHP file due to the use of the 'GET' method in the form
  $quantity = $_GET['Quantity'];
  $cash = $_GET['Cash'];
  $selectedvalue = $_GET['food'];
  $cost;
  $change;

  // If a burger is selected, the quantity will be multiplied by 50 (its price). It also displays the change, which is the difference between the amount of cash and the total cost
  if ($selectedvalue == 'Spicy Borger ni Koya'){
    $cost = $quantity * 85;
    $change = $cash - $cost;
  }

  // If a fries is selected, the quantity will be multiplied by 75 (its price). It also displays the change, which is the difference between the amount of cash and the total cost
  elseif ($selectedvalue == 'Fries ni idol Ko'){
    $cost = $quantity * 50;
    $change = $cash - $cost;
  }

  // If a steak is selected, the quantity will be multiplied by 150 (its price). It also displays the change, which is the difference between the amount of cash and the total cost
  elseif ($selectedvalue == 'Sisig na Pangmasa'){
    $cost = $quantity * 150;
    $change = $cash - $cost;
  }

  // Printing the output and date timestamp using echo, while setting the default timezone to 'Philippines' within the PHP file.
  echo "<h1>Receipt";
  echo "<h2>Total price: " .$cost;
  echo "<h2>You paid: " .$cash;
  echo "<h2>CHANGE: " .$change;
  date_default_timezone_set('Asia/Manila');
  echo "<h2>". date('m/d/Y H:i:s A');
}

?>