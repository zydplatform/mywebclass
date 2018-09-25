<?php 
require_once 'config.php';
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>using ajax </title>
 	<style type="text/css">
 		
 	</style>
 	<script type="text/javascript">
 		function userInput(str){
 			if(str==""){
 				alert("Please fill in student details");
 				document.getElementById('name').innerHTML="";
 				document.getElementById('course').innerHTML="";
 				document.getElementById('batch').innerHTML="";
 				return ;
 			}
 			else{
 				if(window.XMLHttpRequest){
 					// creating an object for firefox,chrome,safari,opera and internet explorer 7+
 					xmlhttp=new XMLHttpRequest();
 				}
 				else{
 					//internet explorer 6,5 
 					xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 				xmlhttp.onreadystatechange=function(){
 					if(this.readyState==4 && this.status==200){
 						document.getElementById('name').innerHTML=this.responseText;
 						document.getElementById('course').innerHTML=this.responseText;
 						document.getElementById('batch').innerHTML=this.responseText;
 					}
 				};
 				xmlhttp.open("GET","ajax2.php?q="+str,true);
 				xmlhttp.send();
 			}
 		}
 	</script>
 </head>
 <body>
 	<h1>Student Details</h1>
 	<hr>
 	<form role="form">
 		<ul>
 			<li>
 			<label for="name">Student Name <input type="text" name="name" id="name"></label></li><br>
 			<li>
 			<label for="course">Student Course<input type="text" name="course" id="course"></label></li><br>
 			<li>
 			<label for="batch">Student Batch<input type="text" name="batch" id="batch"></label></li><br>
 			<li>	
 			<input type="submit" name="submit" id="submit" onsubmit="userInput(this.value)"></li><br>
 		 	</ul>
 		 	</form>
 	<br><br>
 	<div id="txtHint"> <p>Student Details</p></div>
 </body>
 </html>