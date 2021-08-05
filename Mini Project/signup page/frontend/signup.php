<?php include('C:\xampp\htdocs\Mini Project\signup page\backend\signup.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href=<?php echo links::css;?>>
    <link rel="icon" type="image/png" sizes="16x16" href=<?php echo assets::icon;?>>   
</head>

<body>
    <?php include_once('C:\xampp\htdocs\Mini Project\navbar\frontend\navbar.php');
     ?>
    
    <div class="signup-form">
        <div class="form-heading">
            <h1>Sign Up Form</h1>
        </div>
        <div class="form-elements">
            <form action="" method="POST" id="signup-form">
                <table cellspacing="2" cellpadding="8" align="center">
                    <tr>
                        <td align="right"><label for="name">Name <span style="color: red;">&#x204E;</span></label></td>
                        <td><input class="input-box" type="text" id="name" name="name" placeholder="Enter name" required></td>
                        <td><span class="validate-error" id="Name-error"></span></td>
                    </tr>
                    <tr>
                        <td align="right"><label for="u-name">Username <span style="color: red;">&#x204E;</span></label></td>
                        <td><input class="input-box" type="text" id="u-name" name="u-name" placeholder="Enter name" required></td>
                        <td><span class="validate-error" id="Uname-error"></span></td>
                    </tr>
                    <tr>
                        <td align="right"><label for="email">Email <span style="color: red;">&#x204E;</span></label></td>
                        <td><input class="input-box" type="email" id="email" name="email" placeholder="Enter email" required></td>
                        <td><span class="validate-error" id="email-error"></span></td>
                    </tr>
                    <tr>
                        <td align="right"><label for="PhNo">Phone Number <span style="color: red;">&#x204E;</span></label></td>
                        <td><input class="input-box" type="tel" id="PhNo" name="PhNo" placeholder="Enter phone number" required></td>
                        <td><span class="validate-error" id="phone-error"></span></td>
                    </tr>
                    <tr>
                        <td align="right"><label for="address">Address <span style="color: red;">&#x204E;</span></label></td>
                        <td><input class="input-box" type="text" id="address" name="address" placeholder="Enter address" required></td>
                        <td><span class="validate-error" id="address-error"></span></td>
                    </tr>
                    <tr>
                        <td align="right"><label for="password">Password <span style="color: red;">&#x204E;</span></label></td>
                        <td><input class="input-box" type="password" id="password" name="password" placeholder="Enter password" required></td>
                        <td><span class="validate-error" id="password-error"></span></td>
                    </tr>
                    <tr>
                        <td align="right"><label for="cpassword">Confirm Password <span style="color: red;">&#x204E;</span></label></td>
                        <td><input class="input-box" type="password" id="cpassword" name="cpassword" placeholder="Re-enter password" required></td>
                        <td><span class="validate-error" id="confirmpw-error"></span></td>
                    </tr>
                </table>
                <div class="signup-buttons">
                    <!-- <button onclick="document.location.href='<?php links::home; ?>'" type="button">Cancel</button> -->
                    <button type="button" onclick="check_to_submit();">Submit</button>
                </div>
            </form>
        </div>  
    </div>
    
    <?php include_once('C:\xampp\htdocs\Mini Project\footer\frontend\footer.php'); ?>
 
</body>
<?php 
    // if(isset($err)){
    //     foreach ($err as $key => $value) {
    //         echo($value);
    //     }
    //     }
    ?>
    <script src="signup.js"></script>
   
</html>