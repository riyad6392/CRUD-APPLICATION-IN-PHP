<?php 
 namespace MyApp;
 require 'vendor/autoload.php';
 if(isset($_REQUEST['submit']))
 {

 	  $user=$_REQUEST['name'];
 	  $email=$_REQUEST['email'];
 	  $dg=$_REQUEST['designation'];
 	  $ad=$_REQUEST['address'];
    $hidden_id=$_REQUEST['updating_hidden_id'];

    $model = new MVC_Model_for_CRUD_application(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    $controller = new MVC_Controller_for_CRUD_application($model);
    $result = $controller->updateEmployee($hidden_id, $user, $email, $dg, $ad);
    if($result)
    {

    	header("location:index.php?updated");
    }
 }



?>
