<?php
$link = mysqli_connect("localhost","root","")  or die("failed to connect to server !!");
mysqli_select_db($link,"project");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$Job_no=$_POST['Job_no'];
$Reg_no=$_POST['Reg_no'];
$Part_name=$_POST['Part_name'];
$Mech_name=$_POST['Mech_name'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
	echo"<script>'$Job_no', '$Reg_no', '$Part_name', '$Mech_name'</script>";
$insqDbtb="INSERT INTO job_info(Job_no,Reg_no,Part_name,Mech_name) VALUES ('$Job_no', '$Reg_no', '$Part_name', '$Mech_name')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
echo "<script> location.href='job_info.php'; </script>";
exit();
}
}
if(isset($_REQUEST['delete']))
{
$errorMessage = "";
$Job_no=$_POST['Job_no'];

if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
$insqDbtb="DELETE FROM job_info WHERE Job_no='$Job_no'";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
echo "<script> location.href='job_info.php'; </script>";
exit;
}
}
?>