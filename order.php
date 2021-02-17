<?php require './inc/core.inc.php';
      require './inc/connect.inc.php'; ?>
      
<?php
	  if(!loggedin()) {
		  include ('common/header.php');
	  } else {
		  include ('common/header1.php');
	  }
 ?>	   
		<?php
if(!loggedin()) {
header('Location: login.php');
		} else {
			echo "<fieldset>
	<legend><h1>Order History</h1></legend>";
			$query ="SELECT * FROM purchase WHERE username='".$_SESSION['username']."' ORDER BY order_no desc" ;
			$query_run =mysqli_query($link,$query);
			while ( $row = mysqli_fetch_assoc($query_run)) {
				$order_no = $row['order_no'];
				$product_name = $row['product_name'];
				$isbn = $row['isbn'];
				$full_name = $row['full_name'];
				$address = $row['address'];
				$city = $row['city'];
				$state = $row['state'];
				$pin_code = $row['pin_code'];
				$country = $row['country'];
				$mobile_no = $row['mobile_no'];
				$paid = $row['paid'];
				
				if($paid=='Y') {
					echo "<img class='paid' src='images/paid.png'/>";
				} else {
					echo "<i><b>Paid : No</b></i>";
				}
				echo "<h2>".$product_name."</h2>";
				echo "<b>ISBN :</b>".$isbn."<br>";
				echo "<br><b>Address :</b><br>".$full_name." ,<br>";
				echo $address." , ";
				echo $city." , <br>";
				echo $state."- ";
				echo $pin_code." ,<br>";
				echo $country."<br>";
				echo "<b>Mobile No : </b>".$mobile_no."<br>";
				
				echo "<hr>";
			}	
			
		}
		echo "</fieldset>";
	?>				
<?php include('common/footer.php'); ?>
     
	

