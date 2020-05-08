<? php
//create connection
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="name";

$conn=mysqli_connect($db_host,$db_user,$db_password,$db_name);
//check connection
if(!$conn){
	die("connection failed");
}

//$sql = "SELECT * FROM student";
//$result=mysqli_query($conn,$sql);
//$row=mysqli_num_rows($result)>0){
//while($row=mysqli_fetch_assoc($result)){
//	echo "ID: " .$row["ID"]. "NAME: ".$row["name"]. "DEPARTMENT: ".$row["Department"]."BATCH: ".$row["Batch"]."<br>";}
//}
?>
