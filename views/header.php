<?php
$result = DB::getInstance()->getConnection()->query("SELECT * FROM admins WHERE id=1");
$admin=$result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style type="text/css">
  body{
  }
  .container{
    display: flex;
    justify-content:space-around;
    align-items:center;

  }
 img-header{  
   
  }
  .line{
    
    border-bottom: 1px solid black;
    margin-top: 5px;

  }
  </style>
</head>
<body>
  <div class="container">
    <img class="img-header" src="http://t1.gstatic.com/images?q=tbn:ANd9GcTXyV8JW-TZ51KMhi6kiGKVtPmCtxGhes1CwRLjHomwXmX8BjqqNlHMwg"/>
    <div><a class="schoolButton" href="#">School</a></div>
    <div><a class="adminsButton" href="#">Administration</a></div>
    <span><?php echo $admin['name']; ?></span>
    <input class="button" type="button" value="Logout"/>
    <img src="<?php echo 'img/admins images /'.$admin['image']; ?>"/>
  </div>
  <div class="line"></div>


   <!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
<!--   <script type="text/javascript" src="header.js"></script>   -->

</body>
</html>