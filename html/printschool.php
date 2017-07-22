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
  a{
      cursor: pointer;
  }

  .addcourse , .addstudent{
      font-size: 30px;
      
  }

    </style>
</head>
<body>
    <div class="bigContainer">
        <div class="containerlist">
             <span>
                    <h3 class = 'aside_title'>Courses</h3>
                    <a class ='addcourse' >+</a>
             </span>
            <?php echo Courses::printlist();?>

        </div>
        <div class="containerlist">
            <span>    
                    <h3 class  = 'aside_title'>Students</h3>
                    <a class ='addstudent' >+</a>
            </span>
          <?php echo Students::printlist(); ?>
        </div>
    </div>
  
      

</body>
</html>