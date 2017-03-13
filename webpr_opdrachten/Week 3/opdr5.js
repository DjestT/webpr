document.getElementById("form").addEventListener('submit', submittest, false);
var isValid;
var message;
var invalidChars = "!\"#$%&\'()*+,/0123456789:;<=>?@[\\}^_`{|}";

function submittest(evt)
{
    isValid = true;
    message = "";
    var firstName = String(document.getElementById("firstName").value);
    var lastName = String(document.getElementById("lastName").value);
    var password = String(document.getElementById("password").value);
    var confirmPassword = String(document.getElementById("confirmPassword").value);
    var email = String(document.getElementById("email").value);

    checkFirstName(firstName);
    checkLastName(lastName);
    checkPassword(password, confirmPassword);
    checkEmail(email);

    if(!isValid)
    {
        evt.preventDefault();
        document.getElementById("invalidInputMessage").innerHTML = message;
    }
}

function checkFirstName(name)
{
    if(name.length == 0)
    {
        isValid = false;
        message += "Vul een voornaam in</br>";
    }
    
    for (var i = 0; i < invalidChars.length; ++i)
    {
        if (name.includes(invalidChars[i]))
        {
            isValid = false;
            message += "Naam mag enkel letters en punten bevatten</br>";
            break;
        }
    }
}

function checkLastName(name)
{
    if (name.length == 0) {
        isValid = false;
        message += "Vul een achternaamnaam in</br>";
    }

    for (var i = 0; i < invalidChars.length; ++i) {
        if (name.includes(invalidChars[i])) {
            isValid = false;
            message += "Achternaam mag enkel letters en punten bevatten</br>";
            break;
        }
    }
}

function checkPassword(password, confirmation)
{
    if(password.length < 5)
    {
        isValid = false;
        message += "Wachtwoord moet minstens 5 karakters lang zijn</br>"
    }
    
    if(password != confirmation)
    {
        isValid = false;
        message += "Wachtwoord en bevestiging komen niet met elkaar overeen</br>"
    }
}

function checkEmail(email)
{
    if(email.length == 0)
    {
        isValid = false;
        message += "Vul een e-mailadres in</br>";
    }
    
    var pos = email.indexOf("@");
    if(pos < 0)
    {
        isValid = false;
        message += "Een e-mailadres moet \"@\" bevatten</br>";
    }
    else
    {
        if (pos == 0)
        {
            isValid = false;
            message += "Vul een naamgedeelte in voor de \"@\"</br>";
        }
        
        var adresPart = email.substr(pos + 1);
        if (adresPart.length == 0) {
            isValid = false;
            message += "Vul een adresgedeelte in na de \"@\"</br>";
        }
    }
}