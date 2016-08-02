<?php 

	/**
	* 
	*/
	class View
	{
		
		function __construct()
		{
			echo "Vista";
		}
		public function Render($page){
			require 'Views/' . $page . ".php";
		}		
	}

 ?>