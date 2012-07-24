<?php

class Scientist extends Theme
{
	
	public function action_init_theme()
	{
		
		Stack::add( 'template_stylesheet', array( 'http://yui.yahooapis.com/2.7.0/build/reset/reset-min.css', 'screen, print' ), 'reset');
		
		Stack::add( 'template_stylesheet', array( Site::get_url('theme') . '/css/style.css', 'screen, print' ), 'style', array('reset'), 'build_css' );
				
		Stack::add( 'template_header_javascript', Site::get_url('theme') . '/js/main.js', 'main',  null, 'build_js');
			
	}
	// 
	public function action_add_template_vars( $theme, $sg ) {
		
		
		if( $theme->name != $this->name) {
			return;
		}
		// 		
		if(is_object($theme->request)) {
			foreach($theme->request as $name => $status) {
				if($status == TRUE) {
					$request = $name;
				}
			}
		}

		$title = false;
		
		switch( $request )
		{
			case 'display_post':
				$title = $theme->post->title;
				break;
			default:
				$title = '';
				$break;
		}
		
		
		$theme->title = Options::get( 'title' ) . ' &raquo; ' . $title;
		
		$theme->owner = array(
			'name' => 'Morgante Pell',
			'url' => 'http://morgante.net'
		);
		
	}
	// 
	// public function theme_nav_item( $theme, $item )
	// {
	// 	$active = false;
	// 	$current = false;
	// 	
	// 	if( isset($item['active']) && $item['active'] == true) {
	// 		$active = true;
	// 		$current = true;
	// 	}
	// 	
	// 	foreach( $item['subsections'] as $sub) {
	// 		if( isset($sub['active']) && $sub['active'] == true) {
	// 			$current = false;
	// 			break;
	// 		}
	// 	}
	// 	
	// 	$theme->current = $current;
	// 	$theme->active = $active;
	// 	$theme->title = $item['title'];
	// 	$theme->url = $item['url'];
	// 	$theme->subsections = $item['subsections'];
	// 	
	// 	return $theme->fetch('nav_item');
	// 	
	// }

}
?>