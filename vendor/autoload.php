<?php
	
	spl_autoload_register(
		function($class){
			$prefix = "../controller/";
			$sufix = ".php";
			require_once $prefix."{$class}".$sufix;		
		}
	);

?>