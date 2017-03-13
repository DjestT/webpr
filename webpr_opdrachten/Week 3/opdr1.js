var array = ["Een", "Twee", "Drie", "Vier", "Vijf", "Zes", "Zeven", "Acht", "Negen", "Tien"];
array.sort(function (a, b) {return a.length - b.length});

var targetNode = document.getElementById("inhoud");
var textNode = document.createTextNode(array);

targetNode.appendChild(textNode);

