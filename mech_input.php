<?php
$link = mysqli_connect("localhost","root","")  or die("failed to connect to server !!");
mysqli_select_db($link,"project");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$Mech_id=$_POST['Mech_id'];
$Mech_name=$_POST['Mech_name'];
$Mech_phone=$_POST['Mech_phone'];
$Age=$_POST['Age'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO mech_info(Mech_id,Mech_name,Mech_phone,Age) VALUES ('$Mech_id', '$Mech_name', '$Mech_phone', '$Age')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
echo "<script> location.href='mech_info.php'; </script>";
exit();
}
}
if(isset($_REQUEST['delete']))
{
$errorMessage = "";
$Mech_id=$_POST['Mech_id'];

if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
$insqDbtb="DELETE FROM mech_info WHERE Mech_id='$Mech_id'";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
echo "<script> location.href='mech_info.php'; </script>";
exit;
}
}
?>