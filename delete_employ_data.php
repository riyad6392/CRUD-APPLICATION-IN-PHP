<?php
namespace MyApp;
require 'vendor/autoload.php';
$recv=$_REQUEST['id'];
$model = new MVC_Model_for_CRUD_application(HOSTNAME, USERNAME, PASSWORD, DATABASE);
$controller = new MVC_Controller_for_CRUD_application($model);
$result = $controller->deleteEmployee($recv);
 
if($result)
 {
     	header("location:index.php?deleted");
 }
  
  
    
?>
