<?php namespace App\Controller; 
	
class homeController{

	public function index(){
		echo "Index de home controllerr";
		$variable = 'Bienvenido USER a este sistema base inicial!!!!';
		include('html/index.php');
	}
}

?>