
function star_array() {
    star1 = document.getElementById("star-1");
    star2 = document.getElementById("star-2");
    star3 = document.getElementById("star-3");
    star4 = document.getElementById("star-4");
    star5 = document.getElementById("star-5");
    stars = [star1, star2, star3, star4, star5];
    return stars;
}

function clrchange(star_num) {
    stars = star_array();
    var i;
    for(i = 0; i < 5; i++)
    {
        stars[i].className = "unchecked";
    }
    for(i = 0; i < star_num; i++)
    {
        stars[i].className = "checked";
    }
    inp = document.getElementById("rating");
    inp.value = star_num;
}

function submitFORM(){
    
    var form = new FormData();
    form.append("review",document.getElementById("review").value);
    form.append("rating",document.getElementById("rating").value);
    const XHR = new XMLHttpRequest();
    XHR.onload = function(){
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("response").innerHTML = this.responseText;
           }
        };
    XHR.open("POST","http://localhost/Mini%20Project/footer/backend/footer.php")
    XHR.send(form);
    
}

