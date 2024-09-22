<?php
require_once('database.php');

function auth($username,$password)
{
    $conn=con();
    $sql="select * from user_data where user_name='$username' and user_pass='$password'";
    $res=mysqli_query($conn,$sql);
    return $res;
}
function data()
{
	$conn=con();
	$sql1="select * from user_data";
	$res1=mysqli_query($conn,$sql1);
	return $res1;
}
function delete($username)
{
    $conn=con();
    $sql2="delete from user_data where user_name='$username'";
    $delete=mysqli_query($conn,$sql2);
    return $delete;
}
function registration($UserName,$email,$userPassword,$gender,$city)
{
    $conn=con();
    $sql5= "INSERT INTO `user_data` ( `user_name`, `user_email`, `user_pass`, `user_gender`, `user_city`,) VALUES ('$UserName', '$email', '$userPassword', '
    $gender', '$city')";

    $result = mysqli_query($conn, $sql5);
    return $result;
}
?>