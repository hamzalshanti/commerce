<?php 

$conn = mysqli_connect('localhost', 'root', '', 'ecommerce');

if(isset($_POST['user_name'])){

$user_name = $_POST['user_name'];
$sql = "SELECT * FROM users where user_name='$user_name'";
$result = mysqli_query($conn,$sql);
if(strlen($user_name)>4){
if(mysqli_num_rows($result)>0){
	echo 0;
}else{
	echo 1;
}
}else{
	echo -1;
}

}
