<?php
$link = mysqli_connect("localhost","root","")  or die("failed to connect to server !!");
mysqli_select_db($link,"project");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$Cust_no=$_POST['Cust_no'];
$Cust_name=$_POST['Cust_name'];
$Cust_phone=$_POST['Cust_phone'];
$Cust_ad=$_POST['Cust_ad'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
	echo"<script>'$Cust_no', '$Cust_name', '$Cust_phone', '$Cust_ad'</script>";
$insqDbtb="INSERT INTO cust_info(Cust_no,Cust_name,Cust_phone,Cust_ad) VALUES ('$Cust_no', '$Cust_name', '$Cust_phone', '$Cust_ad')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
echo "<script> location.href='cust_info.php'; </script>";
exit();
}
}
if(isset($_REQUEST['delete']))
{
$errorMessage = "";
$Cust_no=$_POST['Cust_no'];

if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
$insqDbtb="DELETE FROM cust_info WHERE Cust_no='$Cust_no'";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
echo "<script> location.href='cust_info.php'; </script>";
exit;
}
}
?>