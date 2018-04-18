$(document).ready(function(){
var hamburger=document.querySelector(".hamburger");
	console.log(hamburger);
hamburger.addEventListener("click",function(){
document.querySelector(".main-nav").classList.toggle("nav-opened");
},false);

});