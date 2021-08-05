<?php
 require_once('C:\xampp\htdocs\Mini Project\footer\backend\footer.php');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
    <footer>
        <div class="container">
            <div class="column-1">
                <div>
                    <h2>Contact</h2>
                </div>
                <div class="chip1">
                    <img src=<?php echo assets::phone;?> alt="Phone">
                    7200471243
                </div>
                <div class="chip1">
                    <a href="mailto:sahanaganesh1911@gmail.com">    
                        <img src=<?php echo assets::email;?> alt="Email">
                        sahanaganesh1911@gmail.com
                    </a>
                </div>
                <div class="chip2">
                    <img src=<?php echo assets::address;?> alt="Location">
                    4th Seaward Road, Valmiki Nagar<br>Thiruvanmiyur, Chennai-600041                    
                </div>
                <br><br>
                <div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.877446436265!2d80.26228911482207!3d12.979689490850586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525d4feeb5f457%3A0x445a670a21338fa2!2s4th%20Seaward%20Rd%2C%20Thiruvalluvar%20Nagar%2C%20Thiruvanmiyur%2C%20Chennai%2C%20Tamil%20Nadu%20600041!5e0!3m2!1sen!2sin!4v1623309141568!5m2!1sen!2sin" width="300" height="200" style="border:0;" title="Map"></iframe>
                </div>
            </div>
            <div class="column-2">
                <form >
                    <div>
                        <h2>Feedback</h2>
                    </div>
                    <div>
                        <p><a href=<?php echo links::review;?> target="_blank">View Reviews</a></p>
                        <textarea id="review" rows="8" cols="50" placeholder="Write review here..." ></textarea>
                        <br><br>
                        <button type="button" onclick="submitFORM();" id="submit-review">Submit</button>
                        <p>
                            <?php echo $err; ?>
                        </p>
                        <p id="response">
    
                        </p>
                    </div>
                    <br>
                    <div>
                        <a href=<?php echo links::about; ?> target="_self">About Us</a>
                    </div>
                    <br>
                    <div class="logo">
                        <a href=<?php echo links::home?> target="_self">Gourmet<span>Kitchen</span></a>
                    </div>
                </form>
            </div>
            <div class="column-3">
               
                    <div>
                        <h2>Rate Us</h2>
                    </div>
                    <div>
                        <span id="star-1" class="unchecked" onclick="clrchange(1)">&#9733;</span>
                        <span id="star-2" class="unchecked" onclick="clrchange(2)">&#9733;</span>
                        <span id="star-3" class="unchecked" onclick="clrchange(3)">&#9733;</span>
                        <span id="star-4" class="unchecked" onclick="clrchange(4)">&#9733;</span>
                        <span id="star-5" class="unchecked" onclick="clrchange(5)">&#9733;</span>
                        <input value="0" type="text" maxlength="1" hidden readonly id="rating">
                        <!-- <button  type="submit">Rate!</button>    -->
                    </div>
                    <div>
                        <p>Avg Rating: 
                        <span>
                            <?php 
                                echo avg_rating();
                            ?>
                        </span>
                        <span class="checked-noclick"> &#9733;</span>
                        <span><?php
                            echo no_of_users();
                        ?></span></p>
                    </div>
                </form>
                <div class="chip">
                    <a href="https://www.instagram.com/" target="_blank">
                        <img src=<?php echo assets::insta;?> height="96" width="96">
                        @gourmetkitchen
                    </a>
                </div>
                <div class="chip">
                    <a href="https://twitter.com/?lang=en" target="_blank">
                        <img src=<?php echo assets::twitter;?> height="96" width="96">
                        @gourmetkitchen
                    </a>
                </div>
                <div class="chip">
                    <a href="https://www.facebook.com/" target="_blank">
                        <img src=<?php echo assets::facebook;?> height="96" width="96">
                        @gourmetkitchen
                    </a>
                </div>
                <br><br><br>
                <div>
                    Author: Sahana Ganesh
                </div>                
            </div>
        </div>
        <div class="copyrights">
            &#169;<span>2021 All Rights reserved</span>
        </div>
    </footer>
</body>
<script src="http://localhost/Mini%20Project/footer/frontend/footer.js"></script>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</html>