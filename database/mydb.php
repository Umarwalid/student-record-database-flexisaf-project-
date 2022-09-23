<?php
$con = new mysqli('localhost:3306','root','','nsdb');
if(!$con){
    echo " Not connected to the database".mysqli_error($con);
}
?>