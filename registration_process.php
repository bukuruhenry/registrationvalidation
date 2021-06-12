<?php
//Connect Your database with your system
$con = mysqli_connect('server','database_user','user_password','database_name');

//Check if the email address exists in database
if (isset($_POST['email_check'])) {
  	$email = $_POST['email'];
  	$sql = "SELECT email FROM users WHERE email = '$email'";
  	$results = mysqli_query($con, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";	
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }

//Insert the validate data to the database
if(isset($_POST['save'])) {
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $fullname = $_POST['fullname'];
  $password = $_POST['password'];
  $hashed = password_hash($password, PASSWORD_DEFAULT);
  
  $user = mysqli_query($con, "INSERT INTO `users` (`fullname`, `password`, `email`) VALUES ( '$fullname', '$hashed', '$email');");

  if($user) {

  //Log in the registered user and show him/her success message

}
}



?>
