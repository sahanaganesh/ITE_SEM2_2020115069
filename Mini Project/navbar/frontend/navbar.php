<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<header>
        <div class="container">
            <div class="logo">
                <a href=<?php echo links::home;?>>Gourmet<span>Kitchen</span></a>
            </div>
            <div class="primary-nav">
               <?php 
                if(isset($_SESSION["u_name"])){ ?> 
                    <a href=<?php echo links::menu;?> target="_self">Menu</a>
                    <?php
                } 
                else{ ?>
                <a onclick="alert('Login to see menu');">Menu</a>
                    <?php
                } ?>
                
                <!-- <a href="reservation.html" target="_blank">Reservations</a>
                <a href="booking.html" target="_blank">Bookings</a> -->
                <a href=<?php echo links::about;?> target="_self">About Us</a>
                <a href=<?php echo links::review;?> target="_self">Reviews</a>
            
            </div>
            <div class="secondary-nav">
                <?php 
                if(isset($_SESSION["u_name"])){
                    ?>
                    <button type="button" class="logout-link"><a href=<?php echo links::logout;?>>Logout</a></button>
                    <button type="button">
                    <?php
                    echo $_SESSION["u_name"];?> </button>
                <?php }  
                else{
                ?>
                     <a class="sign-link" href=<?php echo links::login;?> target="_blank">Login</a>
                    <a class="sign-link" href=<?php echo links::signup;?> target="_blank">Sign up</a>
                <?php } ?>    
         </div>
        </div>
    </header>
</body>
</html>

