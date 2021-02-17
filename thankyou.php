<?php
require './inc/core.inc.php';
      require './inc/connect.inc.php';

if(!loggedin()) {
		  header('Location:login.php');
	  } else {
		  include ('common/header1.php');
	  }
	  echo "<center>";
	  echo "<h1>Thank You for shopping with us.</h1>";
	  echo "Your order has been placed. You will recieve it in approximately 2-3 Business Days.";
	  echo "Your Order Number is :#".$_SESSION['order_no'];
	  echo "<br><br>";
	  include ('common/footer.php');
?>