<?php
session_start();
$username = $_POST['name'];
$password = $_POST['pwd'];
$mysqli=mysqli_connect('localhost','root','password','kkch');
$query = "SELECT uname FROM users WHERE uname='$username' AND pass='$password'";
$result = mysqli_query($mysqli,$query)or die(mysqli_error($mysqli));
$num_row = mysqli_num_rows($result);

		$row=mysqli_fetch_array($result);
		if( $num_row >=1 ) {
			$_SESSION['user_name']=$row['uname'];
			echo 1;
		}
		else{
			echo 'false';
		}
?>