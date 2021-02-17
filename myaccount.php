<?php include ('common/header1.php');
require './inc/core.inc.php';
require './inc/connect.inc.php';
?>
	<fieldset>
	<legend><h1>My Account</h1></legend>
	
	<?php
	
	if(loggedin()) {
		echo 'Hello ! '.$_SESSION['full_name'].'. You are Logged in.';
		} else {
	header('Location: login.php');
	}
	?>
<center>
	<br>
<table cellpadding="4">
<tr><td>
Username </td><td>: <?php echo $_SESSION['username'] ; ?> </td> </tr>

<tr><td>
Full Name </td><td>: <input type="text" name="full_name" maxlength="40" value="<?php echo $_SESSION['full_name'] ; ?>" > </td> </tr>

<tr><td>
Email ID </td><td>: <input type="text" name="email_id" maxlength="40" style="width: 200px;" value="<?php echo $_SESSION['email_id'] ; ?>" disabled> </td> </tr>

<tr><td>
Address  </td><td>: <input type="text" name="address" maxlength="50" value="<?php echo $_SESSION['address'] ; ?>" > </td> </tr>

<tr><td>
City </td><td>: <input type="text" name="city" maxlength="15" value="<?php echo $_SESSION['city'] ; ?>" > </td> </tr>

<tr><td>
State </td><td>: <input type="text" name="state" maxlength="15" value="<?php echo $_SESSION['state'] ; ?>" > </td> </tr>

<tr><td>
Pin Code </td><td>: <input type="text" name="pin_code" maxlength="6" value="<?php echo $_SESSION['pin_code'] ; ?>" > </td> </tr>

<tr><td>Country</td><td>: <select name="country" value="">
	                  <option value="australia">Australia</option>
					  <option value="bhutan">Bhutan</option>
					  <option value="china">China</option>
					  <option value="france">France</option>
					  <option value="germany">Germany</option>
					  <option value="india" selected="selected">India</option>
					  <option value="nepal">Nepal</option>
					  <option value="south africa">South Africa</option>
					  <option value="united kingdom">United Kingdom</option>
					  <option value="united states">United States</option></select></td></tr>
					  </table> 
					  <input type="submit" name="update" value="Update">
					  
</center>
	</fieldset>
<?php include('common/footer.php'); ?>