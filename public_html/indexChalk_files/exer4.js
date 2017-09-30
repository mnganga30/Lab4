

function change(form)
{
  var borcolor = form.bor_color.value;
  var changewidth = form.bor_width.value;
  var bcolor = form.back_color.value;

document.getElementById("para").style.bordercolor = borcolor;
document.getElementById("para").style.border_width = changewidth;
document.getElementById("para").style.background_color = bcolor;

}
