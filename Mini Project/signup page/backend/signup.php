<?php
include('C:\xampp\htdocs\Mini Project\database scripts\dbconnector.php');

?>

<?php

if($_POST){
    if(isset($_POST["name"])){
        $name = $_POST["name"];
    }
    if(isset($_POST["u-name"])){
        $u_name = $_POST["u-name"];
    } 
    if(isset($_POST["email"])){
        $email = $_POST["email"];
    } 
    if(isset($_POST["PhNo"])){
        $phone = $_POST["PhNo"];
    } 
    if(isset($_POST["address"])){
        $address = $_POST["address"];
    } 
    if(isset($_POST["password"])){
        $password = password_hash($_POST["password"],PASSWORD_DEFAULT,array('cost' => 8));
    }   


    $sqlcheck1 = "SELECT * FROM user where u_name='".$u_name."' LIMIT 1";

    $resultcheck1 = mysqli_query($conn,$sqlcheck1);

    $sqlcheck2 = "SELECT * FROM user where email='".$email."' LIMIT 1";

    $resultcheck2 = mysqli_query($conn,$sqlcheck2);

    $sqlcheck3 = "SELECT * FROM user where phone='".$phone."' LIMIT 1";

    $resultcheck3 = mysqli_query($conn,$sqlcheck3);

    $flag = 0;

    if($resultcheck1 and $resultcheck2 and $resultcheck3){
        if( mysqli_num_rows($resultcheck1) > 0)
        {
            $err[] =  '<script>document.getElementById("Uname-error").innerHTML = "Username taken";</script>';
            $flag += 1;

        }if( mysqli_num_rows($resultcheck2) > 0)
        {
            $err[] =  '<script>document.getElementById("email-error").innerHTML = "Email id taken";</script>';
            $flag += 1;

        }if( mysqli_num_rows($resultcheck3) > 0)
        {
            $err[] =  '<script>document.getElementById("phone-error").innerHTML = "Phone number taken";</script>';
            $flag += 1;
        }
        if($flag == 0){
            $sql = "INSERT INTO `user`(`u_name`, `name`, `email`, `phone`, `address`, `password`) VALUES ('".$u_name."','".$name."','".$email."','".$phone."','".$address."','".$password."')";
            $result = mysqli_query($conn,$sql);
            $_SESSION["u_name"] = $u_name;
            header('Location:'."http://localhost/Mini%20Project/home%20page/frontend/");
        }
    }else{
        echo "<script>alert('Error.. file not added')</script>";
    }
    // echo "<meta http-equiv='refresh' content='0'>";

}

?>