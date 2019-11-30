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
$sql = "SELECT * FROM salesman";
$res=mysqli_query($conn,$sql);
echo "<table border='1' class='highlight'>
<tr>
<th>SALESMAN_ID</th>
<th>NAME</th>
<th>COMMISSION</th>
<th>CITY</th>
<th>PHONE</th>
</tr>";
while($r=mysqli_fetch_array($res))
 {
    
    ?>
<tr>
<td><?php echo $r['sales_id'] ?></td>
<td><?php echo $r['name']?></td>
<td><?php echo $r['commission']?></td>
<td><?php echo $r['city']?></td>
<td><?php echo $r['phone']?></td>

</tr>
<?php 
}
?>
</div>
</body>
</html>