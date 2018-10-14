<?php
 /* this the connection file
 */
 $servername = 'localhost';
 $username ='root';
 $password = '';
 $db = 'workshop';
 $conn = new mysqli($servername ,$username,$password,$db);

 if ($conn->connect_error) {
 	die("connection error".$conn->connect_error);
 }
 
 ?>