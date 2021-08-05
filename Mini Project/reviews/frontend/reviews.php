<?php include('C:\xampp\htdocs\Mini Project\reviews\backend\reviews.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviews</title>
    <link rel="stylesheet" href=<?php echo links::css;?>>
    <link rel="icon" type="image/png" sizes="16x16" href=<?php echo assets::icon;?>>
</head>

<body>
    <?php include_once('C:\xampp\htdocs\Mini Project\navbar\frontend\navbar.php'); ?>

    <div>
        <table class="reviews-table">
            <th>User</th>
            <th>Review</th>
            <?php 
            $reviews = getReviews();
            for($i = 0; $i < count($reviews); $i++){ ?>
                <tr>
                <td align ="center" width=10% class="username-column"><?php echo $reviews[$i][0]; ?></td>
                <td align ="center" width=100% class="reviews-column"><?php echo $reviews[$i][1]; ?></td>
            </tr>
            <?php }
            ?>
            <tr>
                <td></td>
            </tr>
        </table>
    </div>

    <?php include_once('C:\xampp\htdocs\Mini Project\footer\frontend\footer.php'); ?>
</body>
</html>