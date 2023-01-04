<?php

$conn=mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'portfolio');

$email = $_GET['email'];

$q = " DELETE FROM company WHERE email='$email' ";

mysqli_query($conn,$q);

header('location:companyinfo.php');

?>