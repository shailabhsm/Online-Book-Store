<?php require './inc/core.inc.php';
      require './inc/connect.inc.php';
       ?>
	  
<?php
	  if(!loggedin()) {
		  include ('common/header.php');
	  } else {
		  include ('common/header1.php');
	  } ?> 
	  
	  <?php
$q="SELECT * FROM books ORDER BY category LIMIT 5";
      $r=mysqli_query($link, $q);
if($r) {	
echo "<table width='600px'>" ;
echo "<h1>Biography</h1>";
while($row=mysqli_fetch_array($r)) { 
if($row['category']=='Biography') {
echo "<td style='vertical-align:top' width='20%'>&nbsp;<a href='details.php?isbn=" .$row['isbn']."'><img src='getImage.php?isbn=".$row['isbn']."' width='180px' height='275px'><br>" .$row['title']. "</a><br>Rs. " .$row['price']. "</td>";
}
}
echo "</table><hr>";
}

?>
  <?php
$q="SELECT * FROM books ORDER BY category";
      $r=mysqli_query($link, $q);
if($r) {	
echo "<table width='600px'>" ;
echo "<h1>Fiction & Non-Fiction</h1>";
while($row=mysqli_fetch_array($r)) { 
if($row['category']=='Fiction & Non-Fiction') {
echo "<td style='vertical-align:top' width='20%'>&nbsp;<a href='details.php?isbn=" .$row['isbn']."'><img src='getImage.php?isbn=".$row['isbn']."' width='180px' height='275px'><br>" .$row['title']. "</a><br>Rs. " .$row['price']. "</td>";
}
}
echo "</table><hr>";
}

?>
  <?php
$q="SELECT * FROM books ORDER BY category";
      $r=mysqli_query($link, $q);
if($r) {	
echo "<table width='600px'>" ;
echo "<h1>Educational and Professional</h1>";
while($row=mysqli_fetch_array($r)) { 
if($row['category']=='Educational & Professional') {
echo "<td style='vertical-align:top' width='20%'>&nbsp;<a href='details.php?isbn=" .$row['isbn']."'><img src='getImage.php?isbn=".$row['isbn']."' width='180px' height='275px'><br>" .$row['title']. "</a><br>Rs. " .$row['price']. "</td>";
}
}
echo "</table><hr>";
}

?>
<?php
$q="SELECT * FROM books ORDER BY category";
      $r=mysqli_query($link, $q);
if($r) {	
echo "<table width='600px'>" ;
echo "<h1>Romance</h1>";
while($row=mysqli_fetch_array($r)) { 
if($row['category']=='Romance') {

echo "<td style='vertical-align:top' width='20%'>&nbsp;<a href='details.php?isbn=" .$row['isbn']."'><img src='getImage.php?isbn=".$row['isbn']."' width='180px' height='275px'><br>" .$row['title']. "</a><br>Rs. " .$row['price']. "</td>";
}
}
echo "</table>";
}

?>
 <?php
include('common/footer.php'); 
?>

