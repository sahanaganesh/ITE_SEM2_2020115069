
<?php
include_once('C:\xampp\htdocs\Mini Project\database scripts\dbconnector.php');
$rating = "";
function avg_rating(){
    global $conn;
    $sql = "SELECT AVG(`rate`) FROM `reviews` WHERE NOT `rate` = '0'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $rate = $row["AVG(`rate`)"];
    $rate_float = number_format((float)$rate, 1, '.', '');
    return $rate_float;
}

function no_of_users(){
    global $conn;
    $sql = "SELECT COUNT(`rate`) FROM `reviews` WHERE NOT `rate` = '0'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $rate = $row["COUNT(`rate`)"];
    $rate_int = intval($rate);
    return $rate_int;
}

$err = "";
$review = "";
if(!isset($_SESSION["u_name"])){
    $err = "Login in to submit review";
}else{
    if ($_POST){
        if(isset($_POST["rating"])){
            $rating = $_POST["rating"];
            
        }
        if(isset($_POST["review"])){
            $review = $_POST["review"];
        }
        $u_name = $_SESSION["u_name"];
        $sql = "INSERT INTO `reviews`(`u_name`, `review`, `rate`) VALUES ('$u_name','$review','$rating')";
        
        $result = mysqli_query($conn,$sql);
        // if($result){
        //     $mesg = "form successfully submitted";
        // }else{
        //     $mesg = "error";
        // }
        // echo($mesg);
    }
    
}

?>

