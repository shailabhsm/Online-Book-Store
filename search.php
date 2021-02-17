<html>
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
 echo "<fieldset>" ;
	echo "<legend><h1>Search</h1></legend>" ;
	if (isset($_GET['search'])) {
	    $search = $_GET['search'] ;
	if(!empty($_GET['search'])) {
		$q="SELECT * FROM books WHERE title LIKE '%".$search."%' ";
        $r=mysqli_query($link, $q);
		$num_rows = mysqli_num_rows($r);
		if($num_rows > 0) {	
while($row=mysqli_fetch_array($r)) { 
echo "<h2><a href='details.php?isbn=" .$row['isbn']."'>" .$row['title']. "</a></h2>" ;
echo "Price: Rs." . $row['price'] . "<hr>";
}  
}  else {
	echo 'No Result Found' ;
}
		} else {
		echo 'Enter Any Keyword.';
	}
 }

 
	echo "<center><form action='search.php' method='GET'>" ;
	echo "<input type='text' name='search' placeholder='Search...' />" ;
	echo "<br>" ;
	echo "<input type='submit' value='Search' />";
	echo "</form>";
	echo "</center>";
?>
	</fieldset>
<?php include('common/footer.php'); ?>
</html>