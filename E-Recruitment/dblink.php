<?php
$link = @mysqli_connect("localhost", "root", "12345678", "recruitment") or die(mysqli_connect_error($link));
?>
<?php
$con= mysqli_connect("localhost","root","12345678","recruitment") or die("Error: " . mysqli_error($con));
mysqli_query($con, "SET NAMES 'utf8' "); 
?>