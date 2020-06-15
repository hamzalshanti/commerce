<?php 
$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');

if(isset($_POST['user_name'])){

$user_name = $_POST['user_name'];
$pass = $_POST['pass'];
$con_pass = $_POST['con_pass'];
$email = $_POST['email'];
$sql1 = "SELECT * FROM users where user_name='$user_name'";
$sql2 = "SELECT * FROM users where email='$email'";
$result1 = mysqli_query($conn,$sql1);
$result2 = mysqli_query($conn,$sql2);
if(empty($user_name) || empty($email) || empty($pass)){
	echo -3;
}else{
if(mysqli_num_rows($result1)>0){
	echo 0;
}
elseif(mysqli_num_rows($result2)>0){
	echo -1;
}
elseif($con_pass != $pass){
	echo -2;
}else{
	$sql = "INSERT INTO users(user_name,email,password) VALUES('$user_name','$email','$pass')";
	$result = mysqli_query($conn,$sql);
	echo 1;
}
}
}

 ?>