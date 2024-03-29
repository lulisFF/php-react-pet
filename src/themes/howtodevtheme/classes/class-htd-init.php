<?php

namespace HTD\classes;

if(!defined('ABSPATH')){
	exit; // Silence is golden
}

class HTD_Init extends HTD_Abstract_Init {

	protected function init() {
		parent::init(); // TODO: Change the autogenerated stub
		add_theme_support('menus');
		register_nav_menus(
			array(
				'header-menu' => __( 'Header menu' ),
				'header-secondary-menu' => __('Header Secondary Menu'),
				'footer-menu' => __('Footer Menu')
			)
		);
	}

	/**
	 * Adds the frontend hooks
	 * @return void
	 */
	protected function add_actions() {
		parent::add_actions(); // TODO: Change the autogenerated stub

		add_action('wp_enqueue_scripts', array($this,'add_scripts'));
	}

	public function add_scripts(){
		if(!is_admin()){
			$this->enqueue_style('htd-css-front',$this->theme_uri . '/css/style.min.css',array(),true);
			$this->enqueue_script('htd-script',$this->theme_uri . '/js/dist/index.min.js',array('jquery'),false, true);
		}
	}

}