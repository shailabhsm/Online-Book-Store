<html>
<?php include ('common/header.php'); 
?>
<?php 
require './inc/core.inc.php';
require './inc/connect.inc.php';
?>
<?php
if(!loggedin()) {
if(isset($_POST['username'])&&isset($_POST['password'])) {
	$username =$_POST['username'];
	$password = $_POST['password'];
	if(!empty($username)&&!empty($password)) {
		$query = "SELECT * FROM users WHERE username ='$username' AND password='$password' ";
	     $query_run = mysqli_query($link,$query);
			$query_num_rows = mysqli_num_rows($query_run);
			if ($query_num_rows==0) {
				echo 'Invalid Username/Password.';
			} else if($query_num_rows==1){
				while($row =mysqli_fetch_assoc($query_run)) {
				$id = $row['id'];
				$username =$row['username'];
				$name =$row['full_name'];
				$email =$row['email_id'];
				$address =$row['address'];
				$city =$row['city'];
				$state =$row['state'];
				$pin_code =$row['pin_code'];
				$country =$row['country'];
				}
				$_SESSION['id'] = $id;
				$_SESSION['username'] = $username;
				$_SESSION['email_id'] = $email;
				$_SESSION['address'] = $address;
				$_SESSION['city'] = $city;
				$_SESSION['state'] = $state;
				$_SESSION['full_name'] = $name;
				$_SESSION['pin_code'] = $pin_code;
				$_SESSION['country'] = $country;
				header('Location: login_success.php');
			}
			
	} else {
		echo 'Enter Username/Password';
	}
}
} else {
	header('Location: myaccount.php');
}
?>
	<center>
	<form action="login.php" name="frmUser" method="POST">
	<fieldset>
	<legend><h1>Login</h1></legend>
	<table>
	<tr>
	<td>
	Username </td><td> :<input type="text" name="username" placeholder="Username"></td>
	<tr>
	<td>
	Password </td><td> :<input type="password" name="password" placeholder="Password"></td></tr>
	</table><br>
	<input type="submit" name="submit" value="Log in">
	<br><br>
	<a href="forget.php">Forget Password</a><br>
	New User? <a href="register.php">Register Here</a>
	</fieldset>
	</form>
	</center>
<?php include('common/footer.php'); ?>
</html>