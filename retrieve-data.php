<?php
require 'mydb.php';

$sid= $_SESSION['userno'];
   
$query="select * from studentrecord where Ssid = $sid"; // Fetch all the data from the table customers
$result=mysqli_query($con,$query);
?>