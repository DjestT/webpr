// initialise onclick
var a = document.getElementById("randomSentence");
a.onclick = generateRandomSentence;
var targetNode = document.getElementById("result");
var xmlhttp = new XMLHttpRequest();

function generateRandomSentence() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if((xmlhttp) && (xmlhttp.readyState == 4) && (xmlhttp.status == 200)) {
            var textNode = document.createTextNode(xmlhttp.responseText);
            targetNode.innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST", "random2.php", true);
    xmlhttp.send();
}