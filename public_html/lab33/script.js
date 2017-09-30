//In JS file
function myFunc()
{
    alert("You called my function!");
}


//In JS
function zoomIn()
{
   var theImgTag = document.getElementById("myImgId");
   theImgTag.width = 500;
   theImgTag.height = 500;
}


function check(form)
{
  var pass1 = form.password1.value;
  var pass2 =form.password2.value;
  if(pass1.length< 8 || pass2.length < 8 )
  {
                    alert("Password is too short")/*displays error message*/
    }
else{
    if(pass1 === pass2)
    {
    alert("The Passwords matched" + form.password2.length)/*displays error message*/
    }
    else {
    alert("Passwords did not match")/*displays error message*/
    }
  }
}
