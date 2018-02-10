<?php namespace App\Controller;

class usuarioController{

	public function index(){
		echo "Index de usuario controller";
	}

	public function ver($arr){
		print_r($arr);
	}
}

?>