<?php 
Class Autores extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');

		$this->load->helper('form');

		$this->load->model('PrimeraAplicacion/Autores_model');
	}
	// cargo todos los registros de los autores 
	function mostrar_todos_autores(){
		$autores = $this->Autores_model->dame_autores();
		// creo array cara los datos
		$array_autores = array('arrayAutores' => $autores );
		// cargo al vista
		$this->load->view('PrimeraAplicacion/lista_autores',$array_autores);

	}
	// Gestionar Autores
	function crearAutor(){
		
			$this->load->view('PrimeraAplicacion/crear_autor');
		if(isset($_POST['cedula'])){
			$idAutor = htmlspecialchars($_POST['cedula']);
		}else{
			$idAutor = null;
		}
		if(isset($_POST['nombre'])){
			$nombre = htmlspecialchars($_POST['nombre']);
		}else{
			$nombre = null;
		}
		if(isset($_POST['apellido'])){
			$apellido = htmlspecialchars($_POST['apellido']);
		}else{
			$apellido = null;
		}
		if(isset($_POST['email'])){
			$idAutor = htmlspecialchars($_POST['email']);
		}else{
			$email = null;
		}


		if(isset($_POST['GuardarAutor'])){
			$this->Autores_model->crear_autor($idAutor,$nombre,$apellido,$email);
		}
	}
	function editarAutor(){

	}
	function eliminarAutor(){

	}
}
 ?>