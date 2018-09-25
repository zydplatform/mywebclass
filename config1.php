<?php 
$servername="localhost";
$user="root";
$password="";
$db_name="ajaxwork";

$conn=new mysqli($servername,$user,$password,$db_name);
if(!$conn){
	die("database not connected");
}
$sql1="INSERT INTO  student(studname,studcourse,studbatch) VALUES('Nambi','software','des005')";
// $sql1 .="INSERT INTO  student(studname,studcourse,studbatch) VALUES('kimbowa','information sciences','info009');"
// $sql1 .="INSERT INTO student(studname,studcourse,studbatch) VALUES('Mary','business','busy247')";
if($conn->query($sql1)==TRUE){
	echo "data inserted into the database";
}


 ?>