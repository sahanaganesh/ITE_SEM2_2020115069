<?php
include('C:\xampp\htdocs\Mini Project\database scripts\dbconnector.php');
?>

<?php
function getReviews(){
    $reviews = [];
    global $conn;
    $sql = "SELECT `u_name`,`review` FROM `reviews` WHERE NOT `review` = '' ORDER BY `id` DESC";
    $result = mysqli_query($conn,$sql);

    if($result){
        while($row = mysqli_fetch_assoc($result)){
            $pairs = [];
            array_push($pairs,$row["u_name"],$row["review"]);
            array_push($reviews,$pairs);
        }
        return $reviews;
    }
}

// function getReviews(){
//     $reviews = [];
//     $pairs = [];
//     global $conn;
//     $sql = "SELECT `u_name`,`review` FROM `reviews`";
//     $result = mysqli_query($conn,$sql);
//     $result_array = mysqli_fetch_array($result);

//     if($result_array){
//         foreach ($result_array as $row) {
//             echo $row;
//             // array_push($pairs,$row["u_name"],$row["review"]);
//             // array_push($reviews,$pairs);
//         }
//         return $reviews;
//     }
// }
    

?>