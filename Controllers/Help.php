<?php 

	/**
	* 
	*/
	class Help extends Controller
	{
		
		function __construct()
		{	
			parent::__construct();
			echo "Estamos en ayuda";
		}

		public function Contacto($comp = "Client"){
			if($comp == "Client"){
				echo "Estamos dentro del metodo contacto Cliente";
			}else if($comp == "Business"){
				echo "Estamos dentro del metodo contacto Business";
			}else{
				echo "KA";
			}	
			require "Models/Help_model.php";
			$model = new Help_model(); 
		}
	}

 ?>