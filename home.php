<?php
require_once('../Models/allDatabase.php');
session_start();
if(empty($_SESSION['username']))
{
    header('location:login.php');
}

$res=data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
<h1>Home Page</h1>
 <h1>welcome User <?php echo $_SESSION['username'];?></h1>
<br>

<?php 
if(isset($_SESSION['mess'])){
  echo $_SESSION['mess'];
  unset($_SESSION['mess']);
}
?>

<table border="1">
    <tr>
        <th>UserName</th>
        <th>Email</th>
        <th>Gender</th>
        <th>City</th>
       
    </tr>
    <?php while($r=$res->fetch_assoc()){?>
    <tr>
        <td><?php echo $r['user_name'];?></td>
        <td><?php echo $r['user_email'];?></td>
        <td><?php echo $r['user_gender'];?></td>
        <td><?php echo $r['user_city'];?></td>
        
        <form action="../Controllers/homeController.php">
            <td><button name="delete" value="<?php echo $r['user_name']; ?>">Delete</button></td>
        </form>
      
    </tr>

    <?php } ?>
    
    
</table>
<br><br>
<form method="post" action="../Controllers/loginCheckController.php">
    <button name="logout">Logout</button>
  </form>
</body>
</html>