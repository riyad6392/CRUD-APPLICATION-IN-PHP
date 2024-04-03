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
    $id_f=$_REQUEST['id'];

    $sl_f=$_REQUEST['salary'];
    $st_f=$_REQUEST['status'];





   // $update_query="UPDATE employee set name='$user',email='$email',designation='$dg',address='$ad' WHERE id=$hidden_id";
    $insert_query = "INSERT INTO employee (name, email, designation, address,id,salary,status) VALUES ('$user', '$email', '$dg', '$ad','$id_f','$sl_f','$st_f')";

    $final_update_query=mysqli_query($connection,$insert_query);
    if($final_update_query)
    {

      header("location:index.php?updated");
    }
 }


?>