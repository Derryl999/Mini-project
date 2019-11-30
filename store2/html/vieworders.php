<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/centeralign.css">
    <link rel="stylesheet" href="../css/materialize.css">


<style>

table

{

border-style:solid;

border-width:1px;

border-color:black;

}

</style>
</head>
<body>
<div class="align">
    <!--<form action="">
        <button>update salesman</button>
    </form> -->








<?php


// if(isset($_POST['submit'])){
$conn = mysqli_connect("localhost", "root", "", "store");
// Check connection

// $_SESSION['uid']=$id;
$sql = "SELECT * FROM orders";
$res=mysqli_query($conn,$sql);
echo "<table border='1' class='highlight'>
<tr>
<th>ORDER_ID</th>
<th>ORDER_DATE</th>
<th>CUSTOMER_ID</th>
<th>SALESMAN_ID</th>
<th>PRODUCT_ID</th>
</tr>";
while($r=mysqli_fetch_array($res))
 {
    
    ?>
<tr>
<td><?php echo $r['order_id'] ?></td>
<td><?php echo $r['ord_date']?></td>
<td><?php echo $r['cust_id']?></td>
<td><?php echo $r['sales_id']?></td>
<td><?php echo $r['prod_id']?></td>
<td><a href="assignSales.php?ord_id=<?php echo $r['order_id'];?>" class="btn btn-info" role="button">Assign Salesman</a></td>

</tr>
<?php 
}
?>
</div>
</body>
</html>