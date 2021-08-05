<?php
require_once('C:\xampp\htdocs\Mini Project\database scripts\dbconnector.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href=<?php echo links::css;?>>
    <link rel="icon" type="image/png" sizes="16x16" href=<?php echo assets::icon;?>>
    
</head>

<body>
    <?php include_once('C:\xampp\htdocs\Mini Project\navbar\frontend\navbar.php'); ?>
    <div>
        
         <div class="container">
            <img src=<?php echo assets::foodabt; ?> alt="food" style="width:100%;">
            <h2 align="Center">About Us</h2>
            <div class="centred">
                GourmetKitchen was started in 2010 with the hope of bringing exotic continental
                delicacies to people. The food is authentic and original. The founders of GourmetKitchen
                hunted and gathered chefs with an excellent sense of taste as they wish only the very best food
                for their customers. The restuarant believes in no compromises, be it in food, quantity or
                ambience. Everything has been designed to enhance the customer's dining experience.
            </div>
         </div>
    </div>

    <?php include_once('C:\xampp\htdocs\Mini Project\footer\frontend\footer.php'); ?> 
</body>
</html>