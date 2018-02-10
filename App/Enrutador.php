<?php namespace App;

class Enrutador{

	public static function run(Request $request){
		$controlador = $request->getControlador().'Controller';
		$ruta = ROOT.'App\Controllers'.DS.$controlador.'.php';
		
		$metodo = $request->getMetodo();
		$argumento = $request->getArgumento();

		//print_r($argumento);

		if(is_readable($ruta)){
			require_once($ruta);
			$mostrar = 'App\\Controller\\'.$controlador;
			$controlador = new $mostrar;

			if(!isset($argumento)){
				$datos = call_user_func(array($controlador,$metodo));
			}else{
				$datos = call_user_func_array(array($controlador,$metodo), $argumento);	
			}
		}else{
			echo "Error 404";
		}
	}
}

?>