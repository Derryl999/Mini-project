<?php
$conn=mysqli_connect("localhost","root","","store");
$sql="select prod_name from product";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_row($result);

echo "<select name='prod_name'>";
while($row=mysqli_fetch_array($result)){
    echo "<option value='".$row['prod_name']."'>".$row['prod_name']."</option>";

    }
echo "</select>";
?>