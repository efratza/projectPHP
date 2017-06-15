<?php
include '../lib/ISavable.php';
//include '../lib/Students.php';
//include '../lib/Courses.php';
include '../lib/DB.php';
include '../lib/Admins.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style type="text/css">
  .bigContainer{
    display: flex;
     justify-content: space-between;

  }
  .containerlist{
        display: flex;
         flex-direction: column;

  }

    </style>
</head>
<body>
    <div class="containerlist">
      <?php echo Admin::printlist();?>
    </div>
  </div>
  
      

</body>
</html>