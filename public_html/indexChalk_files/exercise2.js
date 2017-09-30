
var slideIndex = 0;
  var pictures = ["jayhawk.jpg", "pic1.jpg", "pic2.jpg" , "pic3.jpg",  "pic4.jpg"];
function plus(n) {

if(slideIndex == 0 && n == -1)
{slideIndex =4;}
else {
  if (slideIndex == 4 && n == 1)
  {slideIndex =0;}
  else {
      slideIndex =slideIndex+n;
  }
}
document.getElementById("demo").innerHTML = pictures[slideIndex];
  document.getElementById("myImg").src = pictures[slideIndex];
}
