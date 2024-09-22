<?php
if(isset($_POST['name'])){

    echo "<br>";
    echo "User Name is : ". $_POST['name'];
    echo "<br>";
    echo "User Email is : ".$_POST['email'];
    echo"<br>";
    echo "User Gender is : ".$_POST['gender'];
    echo "<br>";
    echo "User Hometown Is : ".$_POST['city'];
    echo "<br>";
    
   
}else{
    echo "Please Fill the Form";
}
?>

<?php
include_once('../Models/allDatabase.php');


$UserName = $_POST['name'];
$email = $_POST['email'];
$userPassword=$_POST['password'];
$gender = $_POST['gender'];
$city = $_POST['city'];


$status=registration($UserName,$email,$userPassword,$gender,$city);

if($status){
    echo "User Registration Successfull";
}
else{
    echo "User Registration Failed";
}


?>
<br><br><br>
Go To Login Page....<a href="../Views/login.php">Click here</a>;