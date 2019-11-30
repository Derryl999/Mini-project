<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/adminLoginStyle.css">
  </head>
  <body>
    
      <form class="box" action="" method="POST">
    <h1>Admin</h1>
    <input type="text" name="name" placeholder="Username" required>
    <input type="password" name="pass" placeholder="Password" required>
<input type="submit" name="submit" value="Login">
  </form>

  </body>
</html>


<?php
$conn=mysqli_connect("localhost","root","","store");
//mysqli_select_db("store");
if(isset($_POST["submit"]))
{
  $user=$_POST["name"];
  $pass=$_POST["pass"];
  $query="select * from admin where name='$user' && password='$pass'";
  $result=mysqli_query($conn,$query);
  $rows=mysqli_fetch_row($result);
  if($rows)
  {
    header('location:adminview.html');
    echo "success";
  }
  else
  {
    echo "not found";
  }

}
?>