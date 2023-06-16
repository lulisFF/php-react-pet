<?php

namespace HTD\classes;

if(!defined('ABSPATH')){
	exit; // Silence is golden
}

abstract class HTD_Abstract_Init {

	/**
	 * Flag to make sure we're in the admin area if necessary
	 * @var bool
	 */
	protected $is_admin = false;

	/**
	 * This is going to be used when we are in queuing scripts and whatever else
	 *
	 * The theme path
	 *
	 * @var string|null
	 */
	protected $theme_path = null;

	/**
	 * The theme uri
	 *
	 * @var string|null
	 */
	protected $theme_uri = null;

	/**
	 * Directory used
	 *
	 * @var string
	 */

	protected $include_dir;

	/**
	 * Theme version
	 *
	 * @var string
	 */
	protected $version = '1.0.0';

	/**
	 * Constructor
	 *
	 * @param $is_admin
	 */
	public function __construct( $is_admin = false )
	{
		$this->is_admin = $is_admin;
		$this->theme_path = get_stylesheet_directory();
		$this->theme_uri = get_stylesheet_directory_uri();
		$this->include_dir = $is_admin ? 'admin' : '';

		$this->load_dependencies();
		$this->add_actions();
		$this->init();
	}

	/**
	 * Load the dependencies for the theme
	 * @return void
	 */
	protected function load_dependencies(){

	}

	/**
	 * Abstract action, this can also be used to set action with should run both on the frontend and backend
	 *
	 * @return void
	 */

	protected function add_actions(){


	}

	/**
	 * Abstract init method to be extended
	 *
	 * @return void
	 */
	protected function init(){

	}

	/**
	 * Loads template file
	 *
	 * @return void
	 */
	protected function template( $file ){
		$path = $this->is_admin ? '/admin' : '';
		require ($this->theme_path . $path . '/templates/' . $file);
	}

	/**
	 * Wrapper over the wp_enqueue_script function
	 * It will add the theme version to the script source if no version is specified
	 *
	 * @param $handle
	 * @param $src
	 * @param $deps
	 * @param $ver
	 * @param $in_footer
	 *
	 * @return void
	 */
	protected function enqueue_script( $handle, $src = false, $deps = array(), $ver = false, $in_footer = false){
		if($ver === false){
			$ver = $this->version;
		}

		wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
	}


	/**
	 * Wrapper over the wp_enqueue_style function
	 * It will add the theme version to the script source if no version is specified
	 *
	 * @param $handle
	 * @param $src
	 * @param $deps
	 * @param $ver
	 * @param $media
	 * @return void
	 */
	protected function enqueue_style( $handle, $src = false, $deps = array(), $ver = false, $media = 'all'){
		if($ver === false){
			$ver = $this->version;
		}

		wp_enqueue_style($handle, $src, $deps, $ver, $media);
	}

	/**
	 * Returns data for the scripts
	 *
	 * @return array
	 */
	protected function get_localization(){
		return array();
	}

}