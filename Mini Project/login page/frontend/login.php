<?php include('C:\xampp\htdocs\Mini Project\login page\backend\login.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href=<?php echo links::css;?>>
    <link rel="icon" type="image/png" sizes="16x16" href=<?php echo assets::icon;?>>
</head>
<body>
    <?php include_once('C:\xampp\htdocs\Mini Project\navbar\frontend\navbar.php'); ?>

    <div class="login-form">
    <div class="form-heading">
            <h1>Login Form</h1>
        </div>
        <div class="form-elements">
            <form action="" method="POST" id="signup-form">
                <table cellspacing="2" cellpadding="8" align="center">
                    <tr>
                        <td align="right"><label for="u-name">Username <span style="color: red;">&#x204E;</span></label></td>
                        <td><input class="input-box" type="text" id="u-name" value='<?php
                        if(isset($_COOKIE["u-name"])){
                            echo $_COOKIE["u-name"];
                        }?>'name="u-name" placeholder="Enter name" required></td>
                    </tr>
                    <tr>
                        <td align="right"><label for="password">Password <span style="color: red;">&#x204E;</span></label></td>
                        <td><input class="input-box" type="password" id="password" value='<?php
                        if(isset($_COOKIE["password"])){
                            echo $_COOKIE["password"];
                        }?>'name="password" placeholder="Enter password" required></td>
                    </tr>
                    <tr>
                        <td align="centre" colspan="2"><span class="validate-error"><center><?php if(isset($err)){
                            echo $err;
                        }else{
                            echo '';
                        }
                        ?></center></span></td>
                    </tr>
                    <tr><td colspan="2"><center><input type="checkbox" name="check"><span>Remember me</span></center></td></tr>
                    <tr><td align="centre" colspan="2" > <center><input class="signup-buttons" value="Login" type="submit"></center></td>
                  
                    </tr>
                </table>
                <!-- <div class="signup-buttons">
                    <button onclick="document.location.href='<?php links::home; ?>'" type="button">Cancel</button>
                    <button type="button" onclick="check_to_submit();">Login</button>
                </div> -->
              
            </form>
        </div>
    </div>

    <?php include_once('C:\xampp\htdocs\Mini Project\footer\frontend\footer.php'); ?>
</body>
</html>