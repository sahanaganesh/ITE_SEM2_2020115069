<?php
include('C:\xampp\htdocs\Mini Project\payment page\backend\payment.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href=<?php echo links::css;?>>
    <link rel="icon" type="image/png" sizes="16x16" href=<?php echo assets::icon;?>>
    
</head>

<body>
    <?php include_once('C:\xampp\htdocs\Mini Project\navbar\frontend\navbar.php'); ?>
    
    <div style="margin: 30px;" align="center">
        <h3>Order details</h3>
        <table class="reviews-table">
            <th>Name</th>
            <th>Amount</th>
            <th>Phone No.</th>
            <th>Address</th>
            <?php 
            $details = bill_details();
            for($i = 0; $i < count($details); $i++){ ?>
                <tr>
                <td align ="center" class="reviews-column"><?php echo $details[$i][0]; ?></td>
                <td align ="center" class="reviews-column"><?php echo $details[$i][1]; ?></td>
                <td align ="center" class="reviews-column"><?php echo $details[$i][2]; ?></td>
                <td align ="center" class="reviews-column"><?php echo $details[$i][3]; ?></td>
            </tr>
            <?php }
            ?>
            <tr>
                <td></td>
            </tr>
        </table>
        <p><center>We accept only Cash on Delivery</center></p>
    </div>

    <?php include_once('C:\xampp\htdocs\Mini Project\footer\frontend\footer.php'); ?> 
</body>
</html>