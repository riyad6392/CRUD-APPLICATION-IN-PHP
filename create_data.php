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
     <form action="final_cr.php" method="post">
        <input type="text" name="name"  placeholder="name">
        <input type="email" name="email"  placeholder="email">
        <input type="text" name="designation"  placeholder="designation">
        <input type="text" name="address"  placeholder="address">
        <input type="number" name="id" placeholder="id">
         <input type="number" name="salary" placeholder="salary">
         <input type="text" name="status"  placeholder="status">


        <input type="submit" name="submit" value="create data">
        <input type="hidden" name="Criting_hidden_id" value="<?php  echo $recv_id; ?>">
     </form>

    <?php


?>
