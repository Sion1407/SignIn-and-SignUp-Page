<?php

session_start();
//header('location:login.php');
//header('location:valid.php');

$con=mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name=$_POST['user'];
$password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];


$s="select * from usertable where name='$name' ";

$result=mysqli_query($con, $s);

$num=mysqli_num_rows($result);

if ($num==1) {
	echo "username already taken";
	// code...
}
elseif ($confirmpassword!=$password) {
	echo "ConfirmPassword does not match with the password";
	// code...
}
else{
	$reg="insert into usertable(name, password) values ('$name','$password')";
	mysqli_query($con, $reg);
	echo "Registration sucessfull";
	header('location:valid.php');
}
?>

