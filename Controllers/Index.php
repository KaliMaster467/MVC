<?php 

	/**
	* 
	*/
	class Index extends Controller
	{
		
		function __construct()
		{
			parent::__construct();	
			echo "Estamos en el index";
			$this->view->render('index');
		}
	}

 ?>