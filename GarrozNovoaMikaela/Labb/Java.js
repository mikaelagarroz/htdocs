   // var submitBtn = document.getElementById('submitBtn');
   // submitBtn.addEventListener("click", verify);

function verify()
{
    let name = document.getElementById('name')
    let mail = document.getElementById('mail')
    let form = document.getElementById('form')
    
    
    if(name.value.trim() == ' '|| name.value.trim() == null)
    {
        alert("Namn måste vara ifyllt");
        return false;
    }

    else if(mail.value.trim() == ' '|| mail.value.trim() == null)
    {
        alert("Mail måste vara ifyllt korrekt");
        return false;
    }

    else(checkMail() = false)
    {
        alert("Fel email");
    }

}

function checkMail(){

    if(mail.indexOf("@") > 0 && (mail.indexOf(".")) > (mail.indexOf("@")))
    {
        return true;
    }
    else{
        alert("fel");
        return false;
    }

}