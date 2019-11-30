<?php 
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
            $query1="insert into customer values('$username','$cust_id','$email','$address','$phno')";
            $query2="INSERT INTO `login`( `name`, `PASSWORD`) VALUES('$username','$password')";
          // $sql = "INSERT INTO user (username,password,address,phno,email) VALUES ('$username','$password','$address','$phno','$email')";
            
          mysqli_query($link,$query1);
            mysqli_query($link,$query2);

            
    }
    
    //logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location:index.php');
    }
?>