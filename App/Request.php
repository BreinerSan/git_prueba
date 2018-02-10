<?php namespace App;

class Request{

	private $uri;
	private $controlador;
	private $metodo;
	private $argumento;

	public function __construct(){

		if(isset($_GET['url'])){
			$uri = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
			$uri = explode('/', $uri);
			$this->uri = array_filter($uri);
			
			$this->setControlador();
			$this->setMetodo();
			$this->setArgumento();

		}else{
			$this->controlador = 'home';
			$this->metodo = 'index';
		}		

	}

	public function setControlador(){

		if($this->uri[0] =="index.php"){ 
			$this->controlador = "home";
		}else{
			$this->controlador = strtolower(array_shift($this->uri));	
		}
		
		if(!$this->controlador){
			$this->controlador = 'home';
		}

	}

	public function setMetodo(){
		
		$this->metodo = strtolower(array_shift($this->uri));
		
		if(!$this->metodo || $this->metodo == 'index.php'){
			$this->metodo = 'index';
		}		
		
	}

	public function setArgumento(){
		$this->argumento = $this->uri;
		
	}

	public function getControlador(){
		return $this->controlador;
	}

	public function getMetodo(){
		return $this->metodo;
	}

	public function getArgumento(){
		return $this->argumento;
	}

}

?>