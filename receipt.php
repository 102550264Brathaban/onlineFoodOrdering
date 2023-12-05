<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .receipt {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 400px;
            margin: auto;
        }

        .item {
            margin-bottom: 10px;
        }

        .total {
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['name']))
	$name = $_SESSION['name'];

if (isset($_SESSION['email']))
	$email = $_SESSION['email'];

if (isset($_SESSION['amount']))
	$total = $_SESSION['amount'];

if (isset($_SESSION['item1']))
	$item1 = $_SESSION['item1'];

if (isset($_SESSION['item2']))
	$item2 = $_SESSION['item2'];

if (isset($_SESSION['item3']))
	$item3 = $_SESSION['item3'];

if (isset($_SESSION['item4']))
	$item4 = $_SESSION['item4'];

if (isset($_SESSION['item1price']))
	$item1price = $_SESSION['item1price'];

if (isset($_SESSION['item2price']))
	$item2price = $_SESSION['item2price'];

if (isset($_SESSION['item3price']))
	$item3price = $_SESSION['item3price'];

if (isset($_SESSION['item4price']))
	$item4price = $_SESSION['item4price'];

?>

    <div class="receipt">
        <h2>FoodAge Gourmet Catering Services</h2>
		 <div class="customer">
            <span>Customer Name :  <?php echo $name?> </span>
        </div>
		<div>
		    <span>Customer Email :  <?php echo $email?> </span>
        </div>
		<p>***************************************</p>
		<b>Description</b>
		<br/><br/>
        <div class="item">
            <span><?php echo $item1?> : </span>
            <span> <b>RM </b><?php echo $item1price?></span>
        </div>
        <div class="item">
            <span><?php echo $item2?> : </span>
            <span> <b>RM </b><?php echo $item2price?></span>
        </div>
		   <div class="item">
            <span><?php echo $item3?> : </span>
            <span> <b>RM </b><?php echo $item3price?></span>
        </div>
		   <div class="item">
            <span><?php echo $item4?> : </span>
            <span> <b>RM </b><?php echo $item4price?></span>
        </div>
		<p>***************************************</p>
        <div class="total">
            <span>Total:</span>
            <span> <b>RM </b><?php echo $total?></span>
        </div>
		<p>***************************************</p>
		<p> Thank you for purchasing. Please come back again...</p>
    </div>

</body>
</html>