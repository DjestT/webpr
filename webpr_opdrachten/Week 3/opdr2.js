function sum()
{
    var a = parseInt(document.getElementById("getal1").value);
    var b = parseInt(document.getElementById("getal2").value);
    var sum = a + b;
    
    if(isNaN(sum))
    {
        alert("Please use numbers");
    }
    else
    {
        var sumNode = document.getElementById("sum");
        sumNode.innerHTML = "The sum is " + sum;
    }
}

