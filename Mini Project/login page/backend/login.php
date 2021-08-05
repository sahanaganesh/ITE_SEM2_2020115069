<?php
include('C:\xampp\htdocs\Mini Project\database scripts\dbconnector.php');
?>

<?php

?>

<?php

if($_POST){
    if(empty($_POST["check"])){
        if(isset($_POST["u-name"]))
        {
            $u_name = $_POST["u-name"];
        } 
        if(isset($_POST["password"])){
            $password =$_POST["password"];
        } 
    }
    
    if(!empty($_POST["check"])){
        $u_name = $_POST["u-name"];
        $password = $_POST["password"];
        setcookie("u-name", $u_name, time() + (86400 * 30), "/"); 
        setcookie("password", $password, time() + (86400 * 30), "/"); 
        echo "cookie set";
    }

    $sql = "SELECT `u_name`,`password` from `user` where u_name='".$u_name."'LIMIT 1";
    $result = mysqli_query($conn,$sql);
    if($result){
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if($u_name == $row["u_name"] and password_verify($password,$row["password"])){
                $_SESSION["u_name"] = $u_name;
                header('Location:'."http://localhost/Mini%20Project/home%20page/frontend/");
            }else{
                $err = 'Invalid username or password';
            }
        }
    }
}

?>