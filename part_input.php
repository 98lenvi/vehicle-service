<?php
$link = mysqli_connect("localhost","root","")  or die("failed to connect to server !!");
mysqli_select_db($link,"project");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$Part_no=$_POST['Part_no'];
$Part_name=$_POST['Part_name'];
$Part_price=$_POST['Part_price'];
$Part_stock=$_POST['Part_stock'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO part_info(Part_no,Part_name,Part_price,Part_stock) VALUES ('$Part_no', '$Part_name', '$Part_price', '$Part_stock')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
echo "<script> location.href='part_info.php'; </script>";
exit();
}
}
if(isset($_REQUEST['delete']))
{
$errorMessage = "";
$Part_no=$_POST['Part_no'];

if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
$insqDbtb="DELETE FROM part_info WHERE part_no='$Part_no'";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
echo "<script> location.href='part_info.php'; </script>";
exit;
}
}
?>