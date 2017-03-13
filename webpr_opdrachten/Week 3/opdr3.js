var img1 = document.getElementById("img1");
var img2 = document.getElementById("img2");
var img3 = document.getElementById("img3");
var img4 = document.getElementById("img4");

// img1
img1.addEventListener("mouseover", showImg1, false);
function showImg1()
{
    img1.style.zIndex = 4;
}

img1.addEventListener("mouseout", hideImg1, false);
function hideImg1()
{
    img1.style.zIndex = 0;
}

// img2
img2.addEventListener("mouseover", showImg2, false);
function showImg2() {
    img2.style.zIndex = 4;
}

img2.addEventListener("mouseout", hideImg2, false);
function hideImg2() {
    img2.style.zIndex = 1;
}

// img3
img3.addEventListener("mouseover", showImg3, false);
function showImg3() {
    img3.style.zIndex = 4;
}

img3.addEventListener("mouseout", hideImg3, false);
function hideImg3() {
    img3.style.zIndex = 2;
}

// img4
img4.addEventListener("mouseover", showImg4, false);
function showImg4() {
    img4.style.zIndex = 4;
}

img4.addEventListener("mouseout", hideImg4, false);
function hideImg4() {
    img4.style.zIndex = 3;
}