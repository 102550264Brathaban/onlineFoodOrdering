 

<DOCTYPE html>
<html>
<head>
<title>Cart</title>

</head>
		<style>
			body {
			  background-color: #000000;
			  color : white;
			}

			.kgp {
			  margin: auto;
			  width: 60%;
			  padding-left: 1000px;
			   
			}
			table {
				border-collapse: collapse;
				 border-radius: 30px;
			}

			th {
				
				border-bottom: 7px solid #FFA500;
			}
			th, td {
			  padding: 15px;
			}


			table.center {
			  margin-left: auto; 
			  margin-right: auto;
			  border-color : #FFFFFF
			}
		</style>
<body>
<br><br>
<h1 align = "center"> Cart </h1><br/>
<br><br>

<?php
include ('loginDetails.php');




$connection = @mysqli_connect($host,$user,$pswd);

if (!$connection)
	die ("database is not available");
	

$select_db = @mysqli_select_db($connection,$dbnm);
if (!$select_db)
	die ("cannot open database");	



            
			  
$query = "select * from foodItems";
          
		  
		 
		 
$result = mysqli_query($connection,$query);

echo "<table  class='center' width = 50% style= 'background-color:#5C4033 ; font-size:30px'>";


echo "<tr><th>item</th><th>Quantity</th><th>price</th><th>Total</th></tr>";
$row = mysqli_fetch_assoc($result);	

$total = 0;	
$datas = array();

While ($row){

		echo "<tr>";
	echo "<td width = '200'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['item']."</td>";
	echo "<td width = '200'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row['quantity']."</td>";
	echo "<td width = '200'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RM ".$row['price']."</td>";
    echo "<td width = '200'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; RM ".$row['price'] * $row['quantity']."</td>";	
	echo "</tr>";
	
	$datas[] = $row;
	
	
	
	$total +=  + $row['price'] * $row['quantity']; 
	

	$row = mysqli_fetch_assoc($result);		
}
echo "</table>";
//print_r($datas);
//echo $datas[0]['item'];




mysqli_free_result($result);
mysqli_close($connection);

session_start();
$_SESSION['amount'] = $total;
$_SESSION['item1'] = $datas[0]['item'];
$_SESSION['item2'] = $datas[1]['item'];
$_SESSION['item3'] = $datas[2]['item'];
$_SESSION['item4'] = $datas[3]['item'];

$_SESSION['item1price'] = $datas[0]['price'] * $datas[0]['quantity'];
$_SESSION['item2price'] = $datas[1]['price'] * $datas[1]['quantity'];
$_SESSION['item3price'] = $datas[2]['price'] * $datas[2]['quantity'];
$_SESSION['item4price'] = $datas[3]['price'] * $datas[3]['quantity'];



?>

     <br><br><br><br><br><br><br><br><br>
	  <hr width = "65%" size = "10px" color = "#FFA500">
	  <div  class = "kgp"; style = font-size:30px>Total Price : RM <?php echo $total?></div>
	  <div  class = "kgp"; style = font-size:30px><button onclick = "window.location = 'payment.php';" style = background-color:#FFA500;> Proceed to checkout</button></div>

</body>

</html>



