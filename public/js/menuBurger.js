// Menu Burger
var menu_toggle = document.querySelector('.menu_toggle');
var menu = document.querySelector('.menu');
var menu_toggle_span = document.querySelector('.menu_toggle span');

menu_toggle.onclick = function(){
menu_toggle.classList.toggle('active');
menu_toggle_span.classList.toggle('active');
menu.classList.toggle('responsive') ;
}