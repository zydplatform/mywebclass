<?php 
require_once 'config1.php';
$q=intval($_GET['q']);
$query="SELECT * FROM student WHERE id='."$q".'";
$result=$conn->query($query);
if($result->num_rows >0){
	//outputting data in each row
	while($row=$result->fetch_assoc()){
		echo "idno.".$row['id']."Student Name ".$row['studname']."Student Course ".$row['course']."Student Batch ".$row['studbatch']."<br>";
	}
}
else{
	echo "no details for given student above !";
}
 



 ?>