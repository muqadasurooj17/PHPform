<?php
$conn=Mysqli_connect('localhost','root','','my_db');
if(!$conn){
	echo "sory";
}else
{
	echo "success"."<br>";
}


//$sql = " SELECT * FROM student";
//$result=mysqli_query($conn,$sql);
//$row=mysqli_num_rows($result)>0
//$row=mysqli_fetch_assoc($result);
	
$sql = "SELECT * FROM student";
$result=mysqli_query($conn,$sql);
//$row=mysqli_num_rows($result)>0{
while($row=mysqli_fetch_assoc($result)){
	echo "ID: " .$row["ID"]."<br>". 
	"NAME: ".$row["Name"]."<br>".
	 "DEPARTMENT: ".$row["Department"]."<br>".
	 " BATCH: ".$row["Batch"]."<br>";
}


?>
