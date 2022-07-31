// JavaScript Document
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
	menu.classList.toggle('bx-x');
	navbar.classList.toggle('active');
}

window.onscroll = () => {
	menu.classList.remove('bx-x');
	navbar.classList.remove('active');
}

// Get the modal
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");
var modal5 = document.getElementById("myModal5");
var modal6 = document.getElementById("myModal6");

// Get the button that opens the modal
var btn = document.getElementsByClassName("preview");
var btn2 = document.getElementsByClassName("preview2");
var btn3 = document.getElementsByClassName("preview3");
var btn4 = document.getElementsByClassName("preview4");
var btn5 = document.getElementsByClassName("preview5");
var btn6 = document.getElementsByClassName("preview6");

// Get the <span> element that closes the modal
var imgclose = document.getElementById("closing");
var imgclose2 = document.getElementById("closing2");
var imgclose3 = document.getElementById("closing3");
var imgclose4 = document.getElementById("closing4");
var imgclose5 = document.getElementById("closing5");
var imgclose6 = document.getElementById("closing6");

var test = document.getElementById("test");



// When the user clicks the button, open the modal 
for (var i=0; i<btn.length; i++){
	btn[i].onclick = function() {
		modal.style.display = "block";
	}
}
for (var o=0; o<btn2.length; o++){
	btn2[o].onclick = function() {
		modal2.style.display = "block";
	}
}
for (var a=0; a<btn3.length; a++){
	btn3[a].onclick = function() {
		modal3.style.display = "block";
	}
}
for (var b=0; b<btn4.length; b++){
	btn4[b].onclick = function() {
		modal4.style.display = "block";
	}
}
for (var c=0; c<btn5.length; c++){
	btn5[c].onclick = function() {
		modal5.style.display = "block";
	}
}
for (var d=0; d<btn6.length; d++){
	btn6[d].onclick = function() {
		modal6.style.display = "block";
	}
}

// When the user clicks on <span> (x), close the modal
imgclose.onclick = function() {
	modal.style.display = "none";
}
imgclose2.onclick = function() {
	modal2.style.display = "none";
}
imgclose3.onclick = function() {
	modal3.style.display = "none";
}
imgclose4.onclick = function() {
	modal4.style.display = "none";
}
imgclose5.onclick = function() {
	modal5.style.display = "none";
}
imgclose6.onclick = function() {
	modal6.style.display = "none";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
	modal2.style.display = "none";
  }
}

