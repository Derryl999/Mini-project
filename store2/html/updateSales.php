<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/updatesales.css">

</head>
<body>
    <form class="upsales"action="" method="POST">

        <label for="fname">Salesman Id</label><br>
        <input type="number"name="id" placeholder="Sales Id"><br>
        <label for="fname">Salesman Name</label><br>
        <input type="text"name="name" placeholder="Name"><br>
        <label for="fname">Commission</label><br>
        <input type="number"name="commission" placeholder="Commission"><br>
        <label for="fname">City</label><br>
        <input type="text"name="city" placeholder="City"><br>
        <label for="fname">Phone Number</label><br>
        <input type="number"name="phone" placeholder="Phone"><br>
        <input type="submit" name="submit">
        </form>   
    <!--<form action="">
        <button>update salesman</button>
    </form> -->

    
</body>
</html>

<?php
$conn=mysqli_connect("localhost","root","","store");
// if($conn)
//mysqli_select_db("store");
if(isset($_POST["submit"]))
{
    $sales_name=$_POST["name"];
    $sales_id=$_POST["id"];
    $commission=$_POST["commission"];
    $phone=$_POST["phone"];
    $city=$_POST["city"];

    $query1="INSERT INTO `salesman`(`sales_id`, `name`, `commission`, `city`, `phone`) VALUES ($sales_id,'$sales_name',$commission,'$city',$phone)";
    mysqli_query($conn,$query1);
}
?>
