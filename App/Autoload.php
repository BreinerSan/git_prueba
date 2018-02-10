<?php namespace App;

	class Autoload{

		public static function run(){
			spl_autoload_register(function($clase){
				$ruta = str_replace("\\", "/", $clase).".php";
				//print $ruta;
				if(file_exists($ruta)){
					include_once $ruta;
				}else{
					echo "El archivo $ruta no se ha encontrado";
				}
				
			});
		}
	}

?>