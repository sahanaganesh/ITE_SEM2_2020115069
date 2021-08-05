<?php
include('C:\xampp\htdocs\Mini Project\database scripts\dbconnector.php');
?>

<?php

// function bill_details(){
//     global $conn;
//     $user = $_SESSION["u_name"];
//     $sql = "SELECT `name`,`email`,`phone`,`address` FROM `user` WHERE u_name='".$user."'LIMIT 1";
//     $result = mysqli_query($conn,$sql);
//     if($result){
//         $arr = mysqli_fetch_assoc($result);
//         for($i = 0; $i < count($arr); $i++)
//         {
//             echo $arr[$i];
//         }
    
//         return $arr;
//     }
//     else{
//         echo "Error";
//     }
// }

function bill_details(){
    $details = [];
    global $conn;
    $user = $_SESSION["u_name"];
    $sql = "SELECT * 
    FROM `orders` WHERE id = (SELECT max(id) from `orders` where `u_name` = '$user')";
    $result = mysqli_query($conn,$sql);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $pairs = [];
            array_push($pairs,$row["name"],$row["amount"],$row["phone no"],$row["address"]);
            array_push($details,$pairs);
        }
        return $details;
    }
}
?>