<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Payment</title>
</head>
<body>

<?php
session_start();
if (isset($_SESSION['amount']))
	$total = $_SESSION['amount'];

?>

    <form method ="POST">
        <h1>Payment</h1>
		 <label for="name">Customer Name</label><br>
        <input class="input1" type="text" name="name" id="Pname" placeholder="Enter Name"><br>
       
        <label for="email">Enter Email</label><br>
        <input class="input1" type="text" name="email" id="email" placeholder="Enter Email"><br>
		<label for="amount">amount</label><br>
		<input class="input1" type="text" name="amount" id="amount" placeholder=<?php echo $total?>><br>
        <label for="num">Card Number</label><br>
        <input class="input1" type="number" name="cNumber" id="cNumber" placeholder="1234 1234 1234 1234"><br>
        <div class="div1">
            <label for="exp">Card expiry month</label><br>
            <input class="input2" type="month" name="month" id="month" placeholder="MM"><br>
        </div>
        <div class="div1">
            <label for="year">Card expiry year</label><br>
        <input class="input2" type="year" name="year" id="year" placeholder="yyyy"><br>
        </div>
        <div class="div1">
            <label for="cvc">Card CVC</label><br>
        <input class="input2" type="cvc" name="cvc" id="cvc" placeholder="cvc"><br>
        </div>
      <input class="input2" type = "submit" name = "submit" value = 'submit' /> 
    </form>
<?php
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
if($name !=''&& $email !='')
{
session_start();
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;
header("Location:receipt.php");
}
else{
?><span style = "color:white"><?php echo "Please fill all fields.....!!!!!!!!!!!!";?></span> <?php
}
}
?>


	
	
</body>
</html>
