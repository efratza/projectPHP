<?php 

//include 'lib/ISavable.php';
//include 'lib/Person.php';
//include 'lib/Student.php';
//include 'lib/Course.php';
session_start();
include 'DB.php';

    $user = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

if(!isset($_SESSION["user_id"])){
    verifyLogin($user,$pass);
} 
function  verifyLogin($user,$pass){
    
    $conn = DB::getInstance()->getConnection();
    if ($conn->errno) {echo $conn->error; die();}
    
    
    
    
     $result = $conn->query("SELECT * FROM administrators INNER JOIN roles on roles.id = administrators.role WHERE email = '{$user}' ");
     
        $row  = mysqli_fetch_array($result);
       //print_r($row);
	if(is_array($row)){
            if(password_verify($pass,$row['password'])){
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_img"] = $row['image'];
                $_SESSION["user_name"] = $row['name'];
                $_SESSION["user_role"] = $row['role_name'];
                
                header('Location: ..\index.php');
                
            } 
            else {
               $_SESSION["massege"]= "Invalid Password or Username";
               echo $_SESSION["massege"];
                header('Location: login.php');
            } 
	}
        else {
               $_SESSION["massege"]= "Invalid Password or Username";
                header('Location: login.php');
               echo $_SESSION["massege"];
        } 

}
 ?>
