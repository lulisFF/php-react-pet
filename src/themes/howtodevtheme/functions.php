<?php

namespace HTD;

use HTD\classes\HTD_Initialize;

/**
 * Autoload classes from namespace
 */
spl_autoload_register(
	function ($class_name){

		$namespace = "HTD";

		if ( strpos($class_name, $namespace) !== 0){
			return;
		}
		$class_name = str_replace('_','-',$class_name);
		$class_name = str_replace($namespace . '\\','',$class_name);
		$exploded = explode('\\',$class_name);

		$last_key = array_key_last($exploded);
		$exploded[$last_key] = 'class-' . $exploded[$last_key] . '.php';

		$path = implode('/',$exploded);
		$path = strtolower($path);
		include $path;
	}
);

/**
 *  Initialize the theme
 */

new HTD_Initialize();
