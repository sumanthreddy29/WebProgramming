<?php
	$hostname = "localhost";
	$username = "root";
	$password = "root";
	$database = "services";
	$conn = mysqli_connect($hostname,$username,$password) or die(mysqli_error());
	mysqli_select_db( $conn,$database) or die(mysqli_error());

	if(isset($_POST['register'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$password =  $_POST['password'];
	    $phoneno = $_POST['phoneno'];
	    $username = $_POST['username'];
	    
		$query = "INSERT INTO users (username,emailid,phoneno,fname,lname,password) VALUES ('$username','$email','$phoneno','$fname','$lname','$password')";
		$data = mysqli_query($conn,$query) or die(mysqli_error($conn));
		if($data){
	        $message = 'Registration Successful';
		    header('location: index.html');
		}
	}

	if(isset($_POST['login'])){
		$password =  $_POST['password'];
	    $username = $_POST['username'];
	    $email = "";
		$sql = "SELECT * FROM users where username = '$username' and password='$password'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
		    session_start();
		    while($row = mysqli_fetch_assoc($result)) {
		    	$email = $row['emailid'];
		   	}
		    $_SESSION['username'] = $username;
		    $_SESSION['email'] = $email;
		    header('location:rides.php');
		} else {
		    echo "Login Error";
		}
	}

?>
