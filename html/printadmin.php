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
  a{
      cursor: pointer;
  }

  .addadmin{
      font-size: 30px;
      
  }

    </style>
</head>
<body>
    <div class="containerlist">
     <div class="containerlist">
         <span>
                <h3 class = 'aside_title'>Administration</h3>
                <a class ='addadmin' >+</a>
         </span>
      <?php echo Admin::printlist();?>
    </div>
    </div>
  </div>
  
      

</body>
</html>