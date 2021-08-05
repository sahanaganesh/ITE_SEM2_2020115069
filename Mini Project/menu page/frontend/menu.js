
var items = 0;
function addToCart(btn){
    
    var e = document.querySelector("#bill");
    var val = btn.parentNode.parentNode;
    var tr = document.createElement("tr");

    var inp = document.createElement('input');
    inp.setAttribute("class","cart-inp");
    inp.setAttribute("name",`items[${items}]["name"]`);
    inp.setAttribute("id","name");
    inp.setAttribute("readonly","");
    inp.value = val.dataset.name;
    var td = document.createElement("td");
    td.appendChild(inp);
    tr.appendChild(td);

    inp = document.createElement('input');
    inp.setAttribute("class","cart-inp");
    inp.setAttribute("name",`items[${items}]["price"]`);
    inp.setAttribute("id","price");
    inp.setAttribute("readonly","");
    inp.value = val.dataset.price;
    td = document.createElement("td");
    td.appendChild(inp);
    tr.appendChild(td);

    inp = document.createElement('input');
    inp.setAttribute("class","cart-inp");
    inp.setAttribute("name",`items[${items}]["quantity"]`);
    inp.setAttribute("type","number");
    inp.setAttribute("id","quantity");
    inp.setAttribute("min","1");
    inp.value = 1;
    td = document.createElement("td");
    td.appendChild(inp);
    tr.appendChild(td);

    var button = document.createElement('button');
    button.setAttribute("type","button");
    button.setAttribute("onclick","this.parentNode.parentNode.parentNode.removeChild(this.parentNode.parentNode);")
    button.innerHTML = "Delete";
    td = document.createElement("td");
    td.appendChild(button);
    tr.appendChild(td);

    e.prepend(tr);
    items++;
}
function cal(){
    var e = document.querySelector("#bill");
    var tr= e.querySelectorAll("tr");
    console.log(tr);
    var total = 0;
    for(let i=0;i<tr.length;i++){
        td = tr[i].querySelectorAll('td');
        
 
        name = td[0].querySelector("input").value;
        price = parseInt(td[1].querySelector("input").value);
        qua = parseInt(td[2].querySelector("#quantity").value);
        total+=price*qua;
    }
    var output = document.getElementById("total");
    output.innerHTML = "";
    // output.removeChild(output.lastChild);
    // var p = document.createElement('p');
    var text = document.createTextNode("TOTAL:");
    // p.setAttribute("align","center");
    // p.setAttribute("name","amount");
    // p.appendChild(text);
    output.appendChild(text);
    var p = document.createElement('input');
    //var text = document.createTextNode("TOTAL:"+total);
    p.setAttribute("align","center");
    p.setAttribute("id","amount");
    p.setAttribute("name","amount");
    p.setAttribute("readonly","");
    p.setAttribute("class","total-value");
    p.value = total;
    // p.appendChild(text);
    output.appendChild(p);
    
}


// function post_amt(){
//     var form = new FormData();
//     form.append("amount",document.getElementById("amount").value);
//     var payment = document.getElementById("payment");
//     payment.value = "Proceed to pay";
//     const XHR = new XMLHttpRequest();
//     XHR.onload = function(){
//             if (this.readyState == 4 && this.status == 200) {
//                 document.getElementById("amt").innerHTML = this.responseText;
//            }
//         };
//     XHR.open("POST","http://localhost/Mini%20Project/menu%20page/backend/menu.php")
//     XHR.send(form);
// }