<?php 
 define("HOSTNAME","localhost");
 define("USERNAME","root");
 define("PASSWORD","");
 define("DATABASE","employee_crud");

 $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

 if(!$connection)
 {
 	die("connection faild");
 }
 

?>