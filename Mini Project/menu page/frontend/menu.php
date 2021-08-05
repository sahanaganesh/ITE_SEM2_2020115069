<?php include('C:\xampp\htdocs\Mini Project\menu page\backend\menu.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href=<?php echo links::css;?>>
    <link rel="icon" type="image/png" sizes="16x16" href=<?php echo assets::icon;?>>
</head>

<body>
    <?php include_once('C:\xampp\htdocs\Mini Project\navbar\frontend\navbar.php'); ?>
    
    <div>
        <form action="menu.php" method="POST">
        <?php 
        $foods = getFOODS();
        $sort = array("0"=>"Soups","1"=>"Starters","2"=>"Mains","3"=>"Desserts","4"=>"Beverages");
        foreach ($sort as $key => $value) {
        $arr = $foods[$value]; 
        $type = $value;
            $html = '<button type="button" class="menu-head"><h3>'.$type.'</h3></button>
            <div class="menu-items">
                <table class="food-table">';
            echo $html;
        //     <td>
        //     Quantity:
        //     <input type="number" min="0" name="'.$value["name"].'"> 
        // </td>
            foreach ($arr as $index => $value) {
                  $image =   $value['image'];
                  $name = $value["name"];
                  $price = $value["price"];
                  $tr = sprintf('<tr data-name = "%s" data-price = "%s">
                              <td><img src="%s" alt="%s" style="height: 100px;width: 100px;"></td>
                              <td>%s</td>
                              <td>Rs. %s</td>

                              <td><button class="cart-btn" type="button" onclick="addToCart(this)";>Add to Cart</button></td>
                          </tr>',$name,$price,$image,$name,$name,$price);
                  echo $tr;
            }
            $html= '</table>
            </div>';
            echo $html;
           
        }
           
        ?>    
        
           
        </form> 
    </div>
    <section>
      
        <div class="wrapper" id="cart" >
        <form action="" method="POST" id="amt">
        <h1 align = "center">Your Cart</h1>
          <table align = "center" class="billtable" >
            
            <thead id="billhead" >
              <th>Name</th>
              <th>Price</th>
              <th>Quantity</th>
              <th></th>
            </thead>
            <tbody id="bill">
               
            </tbody>
          </table>
          
          <p id="total">
            <p></p> 
          </p>
          
            <p><input align="center" class="del-item-btn" type="button" onclick="cal()" value="Show amount"></p>
            <p><input class="del-item-btn" type="submit" id="payment" value="Proceed to Pay"></p>
            <a href=<?php echo links::payment;?>>Go to payment page</a>
          
        </div>
      </form>
    </section>
    <?php include_once('C:\xampp\htdocs\Mini Project\footer\frontend\footer.php'); ?>
</body>
<script src="menu.js"></script> 
<script>
    var acc = document.getElementsByClassName("menu-head");
    var i;
    
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
    </script>
</html>