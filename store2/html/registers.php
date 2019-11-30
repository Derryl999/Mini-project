<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="../css/regstyle.css" />
  </head>
  <body>
    <form action="" method="POST">
      <div class="container">
        <h1>Register</h1>

        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required />
        <label for="Customer Id"><b>Customer Id</b></label>

        <input type="text" placeholder="Enter id" name="cust_id" required />

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required />
        <label for="phno"><b>Phno</b></label>
        
        <input type="text" placeholder="Enter Phone" name="phno" required />
        <label for="cardno"><b>Card no</b></label>
        
        <input type="text" placeholder="Enter Card_no" name="cardno"  />
        <label for="address"><b>Address</b></label>
        <input
          type="text"
          placeholder="Enter Address"
          name="address"
          required
        />
        <label for="psw"><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="psw"
          required
        />
        <label for="psw-repeat"><b>Confirm Password</b></label>
        <input
          type="password"
          placeholder="Confirm Password"
          name="psw1"
          required
        />
        <hr />
        <button type="submit" class="registerbtn" name="register">
          Register
        </button>
      </div>
      <div class="container signin">
        <p>Already have an account? <a href="userlogin.php">Sign in</a>.</p>
      </div>
    </form>
  </body>
</html>



<?php 
//<?php include('register.php'); 

    session_start();
    $username = "";
    $email = "";
    $errors = array();
    if(isset($_POST['register']))
    {
        $link=mysqli_connect('localhost','root','','store');
        $cust_id = mysqli_real_escape_string($link,$_POST['cust_id']);
        $username = mysqli_real_escape_string($link,$_POST['name']);
        $email = mysqli_real_escape_string($link,$_POST['email']);
        $password = mysqli_real_escape_string($link,$_POST['psw']);
        $password_1 = mysqli_real_escape_string($link,$_POST['psw1']);
        $address = mysqli_real_escape_string($link,$_POST['address']);
        $phno = mysqli_real_escape_string($link,$_POST['phno']);
        $cardno = mysqli_real_escape_string($link,$_POST['cardno']);
    
    //ensuring fields are filled
        if(empty($username)){
            array_push($errors,"username is required");
        }
        if(empty($email)){
            array_push($errors,"email is required");
        }
        if(empty($password_1)){
            array_push($errors,"password is required");
        }
        if($password!=$password_1){
            array_push($errors,"password not matching");
        }
        //no errors save in database
        
           // $password = md5($password_1);
            $query1="insert into customer values('$username','$cust_id','$email','$address',$phno)";
            $query2="INSERT INTO `login`( cust_id,`name`, `PASSWORD`) VALUES('$cust_id','$username','$password')";
            $query3="insert into card_details values('$username','$cust_id','$cardno')";

            // $sql = "INSERT INTO user (username,password,address,phno,email) VALUES ('$username','$password','$address','$phno','$email')";
            mysqli_query($link,$query1);
            mysqli_query($link,$query2);
            if($cardno)
            mysqli_query($link,$query3);
            header("Location:userlogin.php");

            
    }
    
    //logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location:index.php');
    }
    
?>