<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/materialize.css">
    <link rel="stylesheet" href="../css/centeralign.css">



<style>


table

{
    

border-style:solid;

border-width:1px;

border-color:black;

}

</style>
</head>
<body align="center" >
    <div class="align">
    <!--<form action="">
        <button>update salesman</button>
    </form> -->








<?php


session_start();

// if(isset($_SESSION["custview"]) && $_SESSION["custview"]===true ){
//     header("orderprod.php");
//     exit;
// }
$cid=$_GET['cid'];
echo $cid;
  
//echo $_SESSION[cuid];


// if(isset($_POST['submit'])){
$conn = mysqli_connect("localhost", "root", "", "store");
// Check connection

// $_SESSION['uid']=$id;
$sql = "SELECT * FROM product";
$res=mysqli_query($conn,$sql);

// $_SESSION["custview"]==true;
// $_SESSION["prod_id"]=$prod_id;

echo "<table class='highlight' border='1'>
<tr>
<th>PRODUCT_ID</th>
<th>PRODUCT_NAME</th>
<th>PRODUCT_PRICE</th>
<th>WARRANTY</th>
</tr>";
while($r=mysqli_fetch_array($res))
 {
    
    ?>
<tr >
<td><?php echo $r['prod_id'] ?></td>
<td><?php echo $r['prod_name']?></td>
<td><?php echo $r['prod_price']?></td>
<td><?php echo $r['warr']?></td>
<td><a href="orderprod.php?prod_id=<?php echo $r['prod_id'];?>" class="btn btn-info" role="button">Order</a></td>
</tr>
<?php 
}
?>
</div>
</body>
</html>