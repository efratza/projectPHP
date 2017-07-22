<?php
$result = DB::getInstance()->getConnection()->query("SELECT * FROM admins WHERE id=1");
$admin=$result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link type="text/css" rel="stylesheet" href="views/css.css"/>
</head>
<body>
  <div class="container">
    <img class="img-header" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRklprBwytTYgqUxU-wSj8o-mM_zsxM4JH_2fwcoNBjA6_Sc_To5A"/>
    <div class="links">
        <a class= "schoolButton" href="#">School</a>
        <a class="adminsButton" href="#">Administration</a>
    </div>
    <aside>
        <span><?php echo $admin['name']; ?></span>
        <form action="lib/api.php" method="post">
            <input type="submit" name="logout" class="button" value="Logout"/>
        </form>
        <img src="<?php echo 'img/admins images /'.$admin['image']; ?>"/>
    </aside>
  </div>
  <div class="line"></div>


   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <!--<script type="text/javascript" src="script.js"></script>-->   

</body>
</html>


<!--
<html lang="en">
    <head>
        <link type="text/css" rel="stylesheet" href="views/headerStyle.css"/>
        <meta charset="UTF-8">
        <title>School</title>
        <style>
            .line-separator{
    border-bottom:1px solid black;
    margin-top: 5px;

}

.flex-container-header {
    display: flex;
    width: 100%;
    align-items: center;
}

.flex-item-header {
    width: 20%;
    
}
.flex-item-header:nth-child(2){
    width: 30%
}

.l_flex_header{
    margin-right: 1%;
}

.r_flex_container_header{
    display: flex;
    width: 30%;
    direction: rtl;
    margin-left: auto;
    align-items: flex-start;
}

.r_flex_item_header{
    
    width: 50%;
    margin-left: 5%; 
    
    
}

.logo{
    width: 100%;
}

.img_header{
    border-radius: 50%;
    width: 20%;
}

.headerNav{
    
    text-decoration: none;
    padding: 0 10px;
    text-align: center;
    color: black;
}

a.headerNav:nth-of-type(1){
    border-left: 2px black solid;
}

.headerNav{
    font-size: 16px;
}

a.headerNav:nth-of-type(2){
    border-left: 2px black solid;
    border-right: 2px black solid;
}

.navbar{
    display: inline;
    
}

        </style>
    </head>
    <body>
        <div class="flex-container-header">
            <header class="flex-item-header l_flex_header">
                <img class="logo" src="http://t1.gstatic.com/images?q=tbn:ANd9GcTXyV8JW-TZ51KMhi6kiGKVtPmCtxGhes1CwRLjHomwXmX8BjqqNlHMwg"/>
            </header>
            <main class="flex-item-header l_flex_header">
                <a class = 'headerNav' href="#">school</a>
                <a class = 'headerNav' href="#">administration</a>
            </main>
            <eside class="flex-item-header r_flex_container_header">
                <img class = "img_header r_flex_item_header" src="<?php // echo 'img/administrators_img/'.$admin['image']?>"/>
                <span class = "r_flex_item_header">
                    <span class = 'r_flex_header details_admin'><?php // echo $admin['name'].','.' '.Administrator::role($admin['id'])?></span></br>
                    <a class = 'r_flex_header logout' href="#">logout</a>
                </span>
            </eside>  
        </div>-->