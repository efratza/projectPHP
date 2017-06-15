<?php 

include 'lib/ISavable.php';
//include 'lib/Person.php';
include 'lib/Students.php';
include 'lib/Courses.php';
include 'lib/Admins.php';
include 'lib/DB.php';




session_start();

if(!isset($_SESSION["user_id"])){
    header("Location: lib/logIn.php");
} 

 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--<link type="text/css" rel="stylesheet" href="css/indexStyle.css"/>-->
        <meta charset="UTF-8">
        <title>School</title>
    </head>
    <body>
        <?php include 'views/header.php';?>
        <?php // include 'html/printschool.php';?>
        <div class="containerPrint"></div>
        <div class="containerForm"></div>
         
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script type="text/javascript" src="script/script.js"></script>
    </body>
</html>


