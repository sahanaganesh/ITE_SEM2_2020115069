
function validate_signup() 
{
    Name = document.getElementById("name").value;
    Uname = document.getElementById("u-name").value;
    email = document.getElementById("email").value;
    Phone = document.getElementById("PhNo").value;
    address = document.getElementById("address").value;
    pwd = document.getElementById("password").value;
    cpwd = document.getElementById("cpassword").value;
    
    Name_error = document.getElementById("Name-error");
    Uname_error = document.getElementById("Uname-error");
    email_error = document.getElementById("email-error");
    phone_error = document.getElementById("phone-error");
    address_error = document.getElementById("address-error");
    password_error = document.getElementById("password-error");
    confirmpw_error = document.getElementById("confirmpw-error");
    
    var isAlpha = function(ch){
        if (ch >= "A" && ch <= "z"){
            return true;
        }
    }
    var isDigit = function(ch){
        if (ch >= '0' && ch <= "9"){
            return true;
        }
    }
    var isSpace = " ";
    var to_submit = true;
    for(var i = 0; i < Name.length; i++)
    {
        if(!(isAlpha(Name[i]) || Name[i] == isSpace))
        {
            Name_error.innerHTML = "Invalid char in Name";
            to_submit = false;
            break;
        }
    }

    for(i = 0; i < Uname.length; i++)
    {
        if(!(isAlpha(Uname[i]) || isDigit(Uname[i]) || Uname[i] == "_"))
        {
            Uname_error.innerHTML = "Invalid character in username";
            to_submit = false;
            break;
        }
    }

    var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(!(email.match(mailformat)))
    {
        email_error.innerHTML = "Invalid email id";
        to_submit = false;
    }
    
    if(Phone.length == 10)
    {
        for(i = 0; i < Phone.length; i++)
        {
            if(!(isDigit(Phone[i])))
            {
                phone_error.innerHTML = "Invalid number";
                to_submit = false;
                break;
            }
        }
    }
    else
    {
        phone_error.innerHTML = "Enter 10 digit number";
        to_submit = false;
    }

    if(pwd.length < 8)
    {
        password_error.innerHTML = "Minimum 8 characters";
        to_submit = false;
    }
    if(pwd != cpwd)
    {
        confirmpw_error.innerHTML = "Not matching password";
        to_submit = false;
    }

    return to_submit;
}

function check_to_submit()
{   
    var to_submit = validate_signup();
    if(to_submit) 
    {
        document.getElementById("signup-form").submit();
    }

}