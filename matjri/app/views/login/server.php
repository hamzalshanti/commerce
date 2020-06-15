<?php 

$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');
if(isset($_POST['user_name'])){

$user_name = $_POST['user_name'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users where user_name = '$user_name' AND password='$pass' ";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
session_start();
$_SESSION['user'] = $user_name;
$user = mysqli_fetch_assoc($result);
$_SESSION['user_id'] = $user['id'];
echo 1;
}else{
echo 0;
}

}



 ?>
