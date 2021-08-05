<?php
include('C:\xampp\htdocs\Mini Project\database scripts\dbconnector.php');
?>

<?php

    if(isset($_POST["amount"])){
        add_order();
    }


?>
<?php 
function getFOODS(){
    $foods =[];
    $types = [];
   
    global $conn;
    $sql = "SELECT `image`, `food_name`, `price`, `type` FROM `food` ORDER BY `type`";
    $result = mysqli_query($conn,$sql);
    if($result){
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_assoc($result)){
                if(in_array($row["type"],$types)){
                    array_push($foods[$row["type"]],array("image"=>$row["image"],"name"=>$row["food_name"],"price"=>$row["price"]));
                }else{
                    array_push($types,$row["type"]);
                    $foods[$row["type"]]=array(array("image"=>$row["image"],"name"=>$row["food_name"],"price"=>$row["price"]));
                }
            }
            return $foods;
        }
    }
}

function bill_details(){
    $details = [];
    global $conn;
    $user = $_SESSION["u_name"];
    $sql = "SELECT `u_name`,`name`,`phone`,`address` FROM `user` WHERE u_name='".$user."'LIMIT 1";
    $result = mysqli_query($conn,$sql);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $pairs = [];
            array_push($pairs,$row["u_name"],$row["name"],$row["phone"],$row["address"]);
            array_push($details,$pairs);
        }
        return $details;
    }
}

function add_order(){
    global $conn;
    $u_details = bill_details();
    for($i = 0; $i < count($u_details); $i++){
        $u_name = $u_details[$i][0];
        $name = $u_details[$i][1];
        $phone = $u_details[$i][2];
        $address = $u_details[$i][3];
    }
    $amount = $_POST["amount"];
    $sql = "INSERT INTO `orders`(`u_name`, `name`, `phone no`, `address`, `amount`) VALUES ('".$u_name."','".$name."','".$phone."','".$address."','".$amount."')";
    $result = mysqli_query($conn,$sql);
}
?>