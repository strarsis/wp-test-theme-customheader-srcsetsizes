<?php

function theme_setup(){
	add_theme_support('custom-header');
}
add_action('after_setup_theme','theme_setup');

