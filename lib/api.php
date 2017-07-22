<?php 

    include 'ISavable.php';
    //include 'lib/Person.php';
    include 'Students.php';
    include 'Courses.php';
    include 'Admins.php';

    session_start();
    include 'DB.php';

    if(!isset($_SESSION["user_id"])){
        $user = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    //    echo $row['password'];
                 echo $pass;
                 echo $user;

        if(!isset($_SESSION["user_id"])){
            verifyLogin($user, $pass);
        }   
    }

    if(!empty($_POST["logout"])) {
        $_SESSION["user_id"] = "";
        session_destroy();
      }
      ‏
    function verifyLogin($user, $pass){
        $conn = DB::getInstance()->getConnection();
        if ($conn->errno){
            echo $conn->error; die();

        }
        $result = $conn->query("SELECT * FROM admins INNER JOIN roles on roles.role_id = admins.role WHERE email = '{$user}' ");

        $row  = mysqli_fetch_array($result);
        echo 'll'.$row['password'];
        print_r($row);
        if(is_array($row)){
             echo $row['password'];
             echo $pass;
            if($pass == $row['password']){
                $_SESSION["user_id"] = $row['id'];
                $_SESSION["user_img"] = $row['poster'];
                $_SESSION["user_name"] = $row['name'];
                $_SESSION["user_role"] = $row['role_name'];

    //            header('Location: ..\index.php');

            } 
            else {
               $_SESSION["massege"]= "Invalid Username or Password";
    //               echo $_SESSION["massege"];
                    header('Location: login.php');
            } 
        }else {
               $_SESSION["massege"]= "Invalid Username or Password";
                    header('Location: login.php');
    //               echo $_SESSION["massege"];
        } 

    }
    if(isset($_POST['page'])){
           save();
       }

    function save(){
        $page=$_POST['page'];
        switch ($page){
            case 'course':
                var_dump($_FILES);
                $tmp_name = $_FILES["poster"]["tmp_name"];
                $poster_name = basename($_FILES["poster"]["name"]);
                move_uploaded_file($tmp_name, "../img/" . $poster_name);
            //    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                $poster = $poster_name;
                $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
                $newObj = new Courses(7,$name, $description, $poster);
                $newObj->save();
                break;

            case 'student':
                var_dump($_FILES);
                $tmp_name = $_FILES["poster"]["tmp_name"];
                $poster_name = basename($_FILES["poster"]["name"]);
                move_uploaded_file($tmp_name, "../img/" . $poster_name);
            //    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $poster = $poster_name;
            //    $course = filter_var($_POST['course'], FILTER_SANITIZE_STRING);
                $newObj = new Students(7, $name, $phone, $email, $poster);
                $newObj->save();

                break;

            case 'admin':
                var_dump($_FILES);
                $tmp_name = $_FILES["poster"]["tmp_name"];
                $poster_name = basename($_FILES["poster"]["name"]);
                move_uploaded_file($tmp_name, "../img/" . $poster_name);
            //    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
                $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
                $role = filter_var($_POST['role'], FILTER_SANITIZE_STRING);
                $phone = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $poster = $poster_name;
                $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
                $newObj = new Students(7, $name, $phone, $email, $poster);
                $newObj->save();
                break;

            default;
            break;
        }
    
    }
     
    header('Location: ..\index.php');



    
 ?>
