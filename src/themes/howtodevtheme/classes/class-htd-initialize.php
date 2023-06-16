<?php

namespace HTD\classes;

use HTD\admin\classes\HTD_Admin_Init;

if(!defined('ABSPATH')){
	exit; // Silence is golden
}

/**
 * Initialize the theme
 *
 * Class HTD_Initialize
 */

class HTD_Initialize {
	/**
	 * Constructor
	 */
	public function __construct()
	{
		$this->init();
		$this->admin_init();
	}

	/**
	 * Initialize the frontend
	 * @return void
	 */

	private function init(){
		new HTD_Init();
	}

	/**
	 * Initialize the admin area
	 *
	 * @return void
	 */
	private function admin_init() {
		if (is_admin()) {
			new HTD_Admin_Init( true );
		}
	}

}