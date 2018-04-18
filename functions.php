<?php

if(!defined('ANPOL_THEME_DIR')) {
	//define('LOVETOEAT_THEME_DIR', ABSPATH.'wp-content/themes/'.get_template().'/');
	define('ANPOL_THEME_DIR', get_theme_root().'/'.get_template().'/');
}	

if(!defined('ANPOL_THEME_URL')) {
	define('ANPOL_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}
	
if(function_exists('register_nav_menus')) {
	register_nav_menus(array(
			'main_nav' => 'Główne menu nawigacji'
	));
}

function getQueryParams(){
        global $query_string;
        $parts = explode('&', $query_string);
        
        $return = array();
        foreach($parts as $part){
            $tmp = explode('=', $part);
            $return[$tmp[0]] = trim(urldecode($tmp[1]));
        }
        
        return $return;
    }  

function getQuerySingleParam($name){
        $qparams = getQueryParams();
        
        if(isset($qparams[$name])){
            return $qparams[$name];
        }
        
        return NULL;
    }
	
register_sidebar(array(
	'name'=>'Pasek boczny Anpol',
	'id'=>'anpol-archive-widget',
	'description'=>'Widżety w pasku bocznym',
	'before_widget' => '<div id="%1$s" class="box widget %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>'



	));

?>