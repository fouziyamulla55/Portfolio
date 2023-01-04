<?php
$uname = $_POST['uname'];
$email = $_POST['email'];
$password = $_POST['password'];

if (!empty($uname) || !empty($password)  || !empty($email) ){
	$host="localhost";
	$dbUsername="root";
	$dbPasswod="";
	$dbName="admindb";

	//create connection
	$conn=new mysqli($host, $dbUsername, $dbPasswod, $dbName);

	if (mysqli_connect_error()) {
		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		$sql ="SELECT * From admin Where username ='".$uname."' AND email ='".$email."' AND password ='".$password."' limit 1";
		$result=mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)==1){
			echo "<script type='text/javascript'> alert('you have successfully logged in');
		window.location='companyinfo.php';
		</script>";
			
			//exit();
		}else{
			echo "<script type='text/javascript'> alert('unauthorized log-in');
		window.location='contact.html';
		</script>";

		}

			
	}
}
?>