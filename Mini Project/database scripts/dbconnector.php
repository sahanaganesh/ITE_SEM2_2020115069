<?php
class server {
    const servername = "localhost";
    const username = "root";
    const password = "";
    const database = "gourmetkitchen";
}

class links {
    const css = "http://localhost/Mini%20Project/css/main.css";
    const home = "http://localhost/Mini%20Project/home%20page/frontend/home.php";
    const menu = "http://localhost/Mini%20Project/menu%20page/frontend/menu.php";
    const sign_up = "http://localhost/Mini%20Project/signup%20page/frontend/";
    const javascript = "http://localhost/Mini%20Project/main.js";
    const signup = "http://localhost/Mini%20Project/signup%20page/frontend/signup.php";
    const login = "http://localhost/Mini%20Project/login%20page/frontend/login.php";
    const logout = "http://localhost/Mini%20Project/logout/logout.php";
    const review = "http://localhost/Mini%20Project/reviews/frontend/reviews.php";
    const about = "http://localhost/Mini%20Project/about/about.php  ";
    const payment = "http://localhost/Mini%20Project/payment%20page/frontend/payment.php";
    #const footer = 'http://localhost/Mini%20Project/footer/frontend/footer.php';
}
class assets {
    const icon = "http://localhost/Mini%20Project/assets/favicon.ico";
    const address = "http://localhost/Mini%20Project/assets/images/address.jpg";
    const augratin = "http://localhost/Mini%20Project/assets/images/au%20gratin.jpg";
    const babycorn = "http://localhost/Mini%20Project/assets/images/baby%20corn.jpg";
    const cheese_pizza = "http://localhost/Mini%20Project/assets/images/cheese%20pizza.jpg";
    const chocolate_pastry = "http://localhost/Mini%20Project/assets/images/chocolate%20pastry.jpg";
    const cold_coffee = "http://localhost/Mini%20Project/assets/images/cold%20coffee.jpg";
    const corn_on_toast = "http://localhost/Mini%20Project/assets/images/corn%20on%20toast.jpg";
    const cream_of_veg_soup = "http://localhost/Mini%20Project/assets/images/cream%20of%20vegetable%20soup.jpg";
    const email = "http://localhost/Mini%20Project/assets/images/email.jpg";
    const facebook = "http://localhost/Mini%20Project/assets/images/facebook.jpg";
    const filter_coffee = "http://localhost/Mini%20Project/assets/images/filter%20coffee.jpg";
    const foodabt = "http://localhost/Mini%20Project/assets/images/foodabt.jpg";
    const foodbg = "http://localhost/Mini%20Project/assets/images/foodbg.jpg";
    const french_onion_soup = "http://localhost/Mini%20Project/assets/images/french%20onion%20soup.jpg";
    const iced_tea = "http://localhost/Mini%20Project/assets/images/iced%20tea.jpg";
    const insta = "http://localhost/Mini%20Project/assets/images/insta.jpg";
    const kitkat_shake = "http://localhost/Mini%20Project/assets/images/kitkat%20shake.jpg";
    const lasagna = "http://localhost/Mini%20Project/assets/images/lasagna.jpg";
    const lime_mint_cooler = "http://localhost/Mini%20Project/assets/images/lime%20mint%20cooler.jpg";
    const manchow_soup = "http://localhost/Mini%20Project/assets/images/manchow%20soup.jpg";
    const margherita = "http://localhost/Mini%20Project/assets/images/margherita.jpg";
    const mojito = "http://localhost/Mini%20Project/assets/images/mojito.jpg";
    const nachos = "http://localhost/Mini%20Project/assets/images/nachos.jpg";
    const nutella_brownie = "http://localhost/Mini%20Project/assets/images/nutella%20brownie.jpg";
    const oreo_ice_cream = "http://localhost/Mini%20Project/assets/images/oreo%20ice%20cream.jpg";
    const paneer_platter = "http://localhost/Mini%20Project/assets/images/paneer%20platter.jpg";
    const phone = "http://localhost/Mini%20Project/assets/images/phone.jpg";
    const profile = "http://localhost/Mini%20Project/assets/images/profile.jpg";
    const red_sauce_pasta = "http://localhost/Mini%20Project/assets/images/red%20sauce%20pasta.jpg";
    const salted_caramel = "http://localhost/Mini%20Project/assets/images/salted%20caramel%20jar.jpg";
    const strawberry_waffle = "http://localhost/Mini%20Project/assets/images/strawberry%20waffle.jpg";
    const tomato_soup = "http://localhost/Mini%20Project/assets/images/tomato%20soup.jpg";
    const twitter = "http://localhost/Mini%20Project/assets/images/twitter.jpg";
    const veg_loaded = "http://localhost/Mini%20Project/assets/images/veg%20loaded.jpg";
    const white_sauce_pasta = "http://localhost/Mini%20Project/assets/images/white%20sauce%20pasta.jpg";
}
?>

<?php
$conn = new mysqli(server::servername,server::username,server::password,server::database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
?>
