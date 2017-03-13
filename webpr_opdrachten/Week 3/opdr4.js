var text = document.getElementById("inhoud");
var container = document.getElementById("container");
var pos = 0;
var id = setInterval(frame, 10);
var move = 1;

function frame()
{
    
    if (pos > (container.offsetWidth - text.offsetWidth))
        move = -1;
    else if (pos < 0)
        move = 1;

    pos += move;
    text.style.left = pos + "px";
}