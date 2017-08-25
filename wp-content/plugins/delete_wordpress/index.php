<?php

/*
Plugin Name: Kill Wordpress Plugin
Plugin URI: https://swissacademy.eu
Author: Killer Bunny
Author URI: https://swissacademy.eu
Description: Acest plugin nu face absolut nimic. Nici macar rau.
*/


add_shortcode('afisare_text','kwp_afisare_text');
add_filter('widget_title','kwp_change_title');
add_filter('the_content','kwp_facebook_like');



function kwp_afisare_text() {
	echo '<img src="https://www.w3schools.com/css/trolltunga.jpg">';
	
}

function kwp_change_title($titlu) {
	echo $titlu.'PRRRRRRRRRRRRRRRRR';
}

function kwp_facebook_like ($content) {
	echo do_shortcode($content);
	echo '<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&size=small&show_faces=true&share=true&height=80&appId" width="450" height="80" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>';
}














