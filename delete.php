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
 $recv=$_REQUEST['id'];

 $query = "DELETE FROM employee	WHERE id=$recv";
 $run_delete_query = mysqli_query($connection,$query);
 if($run_delete_query)
 {
     	header("location:index.php?deleted");
 }
?>