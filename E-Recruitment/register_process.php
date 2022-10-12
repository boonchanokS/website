<?
ob_start();
session_start();
?>
<html lang="en">
	<head><meta charset="utf-8"></head>
<body>
<?php

if(isset($_POST['title'])){
	include("dblink.php");
$title=$_POST['title'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$idcardno=$_POST['idcardno'];
$pass=md5($_POST['pass']);
$repass=md5($_POST['repass']);
$email=$_POST['email'];
$position=$_POST['position'];
$accept=$_POST['accept'];

if ($pass==$repass) {
	$sql = "INSERT INTO member (member_id,member_title,member_name,member_latname,member_idcard,member_pass,member_email,member_postion,accept)
VALUES ('NULL', '$title','$name','$lastname','$idcardno','$pass','$email','$position','$accept')";

$result = mysqli_query($con,$sql);
//echo "$sql";
echo "<script>";
echo "alert(\" บันทึกข้อมูบเรียบร้อย\");"; 
echo "window.history.back()";
echo "</script>";
}
}

?>
	
</body>
</html>