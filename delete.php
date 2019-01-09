<?php
$user='root';
$pass='';
$dbname='Phonebook';
$db= new mysqli('localhost',$user,$pass,$dbname) ;
$phoneno=$_GET["phone"];
$sql="DELETE FROM `details` WHERE `details`.`Phonenumber` =$phoneno";
if($db->query($sql))
    echo "True";
$db->query($sql);
header("location:index.php");
?>