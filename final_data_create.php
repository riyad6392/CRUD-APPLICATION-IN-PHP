<?php
 namespace MyApp;
 require 'vendor/autoload.php';
   
   if(isset($_REQUEST['submit']))
 {

    $user=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $dg=$_REQUEST['designation'];
    $ad=$_REQUEST['address'];
    $id_f=$_REQUEST['id'];

    $sl_f=$_REQUEST['salary'];
    $st_f=$_REQUEST['status'];


    $model = new MVC_Model_for_CRUD_application(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    $controller = new MVC_Controller_for_CRUD_application($model);
    $result = $controller->createEmployee($user, $email, $dg, $ad,$id_f,$sl_f,$st_f);
    if($result)
    {

      header("location:index.php?updated");
    }
 }


?>
