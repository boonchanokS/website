<?
ob_start();
session_start();
?>
 <html lang="en">
  <head><meta charset="utf-8"></head>
<body>
<?php 
 if(isset($_POST['username'])){
 //connection
 include("../../dblink.php");
//รับค่า user & password
$usern = $_POST['username'];
$passw = md5($_POST['password']);
                                              //query 
 $sql="SELECT * FROM member Where member_idcard ='".$usern."' and member_pass ='".$passw."' ";
 $result = mysqli_query($con,$sql);
 //echo "$sql";
if(mysqli_num_rows($result)<>0){
 $row = mysqli_fetch_array($result);
 $_SESSION["member_idcard"] = $row["member_idcard"];
 $_SESSION["Status"]= $row["Status"];
 $_SESSION["member_name"] = $row["member_name"];
 if($_SESSION["Status"]=="admin"){ //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
 Header("Location: ..\..\admin\index.php");
  //echo "<script>";
//echo "alert(\" กำลังปรับปรุง\");"; 
//echo "window.history.back()";
//echo "</script>";
 }
if ($_SESSION["Status"]=="user"){  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
//echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
 Header("Location:../../user/index.php");
}
}else{
echo "<script>";
echo "alert(\" user หรือ  password ไม่ถูกต้อง\");"; 
echo "window.history.back()";
echo "</script>";
 }
 }
 ?>

</body>
</html>