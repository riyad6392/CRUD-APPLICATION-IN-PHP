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

 if(isset($_REQUEST['edit_id']))
 {
  $recv_id=$_REQUEST['edit_id'];
  $get_info="SELECT * FROM employee WHERE id=$recv_id";
  $select_info = mysqli_query($connection,$get_info);

  while($row=mysqli_fetch_assoc($select_info))
  {
    

    ?>
     <form action="update_data.php" method="post">
        <input type="text" name="name" value="<?php  echo $row['name'];?>" placeholder="name">
        <input type="email" name="email" value="<?php  echo $row['email'];?>" placeholder="email">
        <input type="text" name="designation" value="<?php  echo $row['designation'];?>" placeholder="designation">
        <input type="text" name="address" value="<?php  echo $row['address'];?>" placeholder="address">
        <input type="submit" name="submit" value="update data">
        <input type="hidden" name="updating_hidden_id" value="<?php  echo $recv_id; ?>">
     </form>

    <?php

  }

 }

?>

  
