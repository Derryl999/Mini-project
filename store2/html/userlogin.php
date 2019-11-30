<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/UserLoginStyle.css">
  </head>
  <body>
    
      <form class="box" action="" method="POST">
    <h1>Login</h1>
    <input type="text" name="name" placeholder="Username" required>
    <input type="password" name="pass" placeholder="Password" required>
<input type="submit" name="submit" value="Login">
<a href="registers.php">Not registered yet?click here</a>
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
  $query="select * from login where name='$user' && password='$pass'";
  $result=mysqli_query($conn,$query);
  $rows=mysqli_fetch_assoc($result);
  if($rows)
  {
    session_start();
    $_SESSION['cust_id']=$rows['cust_id'];
    $cid=$rows['cust_id'];
    echo $cid;
    header("location:index1.php?cid=$cid");//index1.html?id=$array['custid']
    echo "success";
  }
  else
  {
    echo "not found";
  }

}


/*$servername = "localhost";
$username = "root";
$password = "";
$database="store";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    //include('dbcon.php');
    if(isset($_POST['done']))
    {
      $name=$_POST['name'];
      $pass=$_POST['pass'];
      if($name!=""&&$pass!="")
      {
        $qry="select * from login where name='$name' and pass='$pass' ";
        $res=mysqli_query($conn,$qry);
        $row=mysqli_fetch_assoc($res);
        if($row)
        {
          header('location:index1.html');
        }
        else
        echo "user and password incorrect";
      }
      else
      echo "enter both username and password";
    }


   
    
    //$conn->close(); */
    ?>