function myFunction() {
  var x = document.getElementById('a1');
  var y = document.getElementById('a2');
  if (x.style.display === 'none') {
      x.style.display = 'block';
      y.style.display = 'none';
  } 

}
function myFunction2() {
  var x = document.getElementById('a2');
  var y = document.getElementById('a1');
  if (x.style.display === 'none') {
      x.style.display = 'block';
      y.style.display = 'none';
  } 
}
function myFunction3(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}