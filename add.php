<?php
$user='root';
$pass='';
$dbname='Phonebook';
$db= new mysqli('localhost',$user,$pass,$dbname) ;

$lastname=$_GET["Lastname"];
$firstname=$_GET["Firstname"];
$number=$_GET["Phonenumber"];

$sql="INSERT INTO `details` (`Firstname`, `Lastname`, `Phonenumber`) VALUES ('$firstname', '$lastname', '$number')";
$db->query($sql); 
    echo "<script>alert('added successfully')</script>";
    header("location:index.php");

?>