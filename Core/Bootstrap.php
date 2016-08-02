<?php 

	/**
	* 
	*/
	class Bootstrap
	{
		
		function __construct()
		{
			$url = isset($_GET['url']) ? $_GET['url'] : null;
			$url = rtrim($url, "/");
			$url = explode("/", $url);
			print_r($url);

			if(empty($url[0])){
				require 'Controllers/Index.php';
				$controller = new Index();
				return false;
			}

			$file = 'Controllers/' . $url[0] . '.php';
			
			if(file_exists($file)){

			require $file;

			$controller = new $url[0];

			}else{
				require "Controllers/Error.php";
				$controller = new Error();
				return false;
			}

			if(isset($url[2])){
				$controller->{$url[1]}($url[2]);
			}else{
				if(isset($url[1])){
					$controller->{$url[1]}();

				}
			}			
		}
	}

 ?>