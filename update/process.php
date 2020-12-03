<?php
include_once 'database.php';
if(isset($_POST['btn-save']))
{
// variables for input data
$id=$_POST['id'];
$rollno = $_POST['roll_no'];
$name = $_POST['sname'];
$address = $_POST['saddress'];

// sql query for inserting data into database

mysqli_query($conn,"insert into student(id,rollno,name,address) values ('$id','$rollno','$name','$address')") or die(mysqli_error());
echo "<p align=center>Data Added Successfully.</p>";
}
?> 