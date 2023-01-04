<?php
$cname = $_POST['cname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$description = $_POST['description'];

if (!empty($cname) || !empty($email) || !empty($phone) || !empty($description)){
	$host="localhost";
	$dbUsername="root";
	$dbPasswod="";
	$dbName="portfolio";

	//create connection
	$conn=new mysqli($host, $dbUsername, $dbPasswod, $dbName);

	if (mysqli_connect_error()) {
		echo "<script type='text/javascript'> alert('unable to login please try after some time');
		//window.location='contact.html';
		//</script>";
		die('Connect Error('.mysqli_connect_errno().')'. mysqli_connect_error());
	} else {
		//$SELECT ="SELECT email From customer Where email = ? Limit 1";
		$sql ="SELECT * From company Where  email ='".$email."' limit 1";
		$re=mysqli_query($conn,$sql);
		$num=mysqli_num_rows($re);
		if($num==1){
			echo "<script type='text/javascript'> alert('some one registered using this email');
		window.location='contact.html';
		</script>";
		}
		else{

		$INSERT ="INSERT Into company (cname, email, phone, description) values(?,?,?,?)";
      
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssis", $cname, $email, $phone, $description );
			$stmt->execute();
			echo "<script type='text/javascript'> alert('message sent');
		window.location='contact.html';
		</script>";
		}
           // $stmt->close();
            $conn->close();
	
	}
}else {
	echo "all fields are required";
	die();
}
?>