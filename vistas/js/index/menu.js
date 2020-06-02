//Activacion menu hamburguesa Jquery
$( document ).ready(function() {
	$('#menu_on').click(function(){ // Al hacer click...
		$('body').toggleClass('visible_menu'); // Añadimos o eliminamos la clase 'visible_menu' al body
		})
});


// EFECTO APARECER/DESAPARECER MENU AL HACER SCROLL
//JAVASCRIPT
let new_scroll_position = 0;
let last_scroll_position;
const header = document.getElementById("header");

window.addEventListener('scroll', function(e) {
last_scroll_position = window.scrollY;

// Scrolling down
if (new_scroll_position < last_scroll_position && last_scroll_position > 80) {
// header.removeClass('slideDown').addClass('slideUp');
header.classList.remove("slideDown");
header.classList.add("slideUp");

// Scrolling up
} else if (new_scroll_position > last_scroll_position) {
// header.removeClass('slideUp').addClass('slideDown');
header.classList.remove("slideUp");
header.classList.add("slideDown");

}

new_scroll_position = last_scroll_position;

});