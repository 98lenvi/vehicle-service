<?php
$link = mysqli_connect("localhost","root","")  or die("failed to connect to server !!");
mysqli_select_db($link,"project");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$Reg_no=$_POST['Reg_no'];
$Cust_name=$_POST['Cust_name'];
$Model=$_POST['Model'];
$cc=$_POST['cc'];
$yr=$_POST['yr'];
$kms=$_POST['kms'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO vehicle_info(Reg_no,Cust_name,Model,cc,yr,kms) VALUES ('$Reg_no', '$Cust_name', '$Model', '$cc', '$yr','$kms')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
echo "<script> location.href='vehicle_info.php'; </script>";
exit;
}
}
if(isset($_REQUEST['delete']))
{
$errorMessage = "";
$Reg_no=$_POST['Reg_no'];

if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
$insqDbtb="DELETE FROM vehicle_info WHERE Reg_no='$Reg_no'";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
echo "<script> location.href='vehicle_info.php'; </script>";
exit;
}
}
?>