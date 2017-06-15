<?php
include '../lib/ISavable.php';
include '../lib/Students.php';
include '../lib/Courses.php';
include '../lib/DB.php';
//include '../lib/Admins.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style type="text/css">
  .bigContainer{
    display: flex;
     justify-content: flex-start;

  }
  .containerlist{
        display: flex;
         flex-direction: column;

  }



    </style>
</head>
<body>
  <div class="bigContainer">
    <div class="containerlist">
        <input class="add" type="button" value="button"/>
      <?php echo Courses::printlist();?>
      
    </div>
    <div class="containerlist">
      <?php echo Students::printlist(); ?>
    </div>
  </div>
  
      

</body>
</html>