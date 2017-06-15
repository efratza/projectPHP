<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <style type="text/css">
  
    </style>
</head>
    <body>
        <img class = "edit_img" src ="<?php// echo 'img/'.$row['pic'];?>">
        <form action="api.php?page=edit" method="POST" 
        enctype='multipart/form-data'>
            <input type='file' name='poster' style="color: whitesmoke;">
            <input type = 'number' name = 'id' value = "<?php //echo $row['id']?>" readOnly>
           <input type='text' name ='name' value= "<?php //echo $row['name'];?>">
            <input type='date' name='year' value="<?php //echo $row['year'].'-01-01';?>">
            <input type="hidden" name ="img" value ="<?php// echo $row['pic'];?>">
            <input type="submit">
        </form>

    </body>
</html>