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

 if(isset($_REQUEST['submit']))
 {

 	$user=$_REQUEST['name'];
 	$email=$_REQUEST['email'];
 	$dg=$_REQUEST['designation'];
 	$ad=$_REQUEST['address'];
    $hidden_id=$_REQUEST['updating_hidden_id'];
    $update_query="UPDATE employee set name='$user',email='$email',designation='$dg',address='$ad' WHERE id=$hidden_id";
    $final_update_query=mysqli_query($connection,$update_query);
    if($final_update_query)
    {

    	header("location:index.php?updated");
    }
 }



?>