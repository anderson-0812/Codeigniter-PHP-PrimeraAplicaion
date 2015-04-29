<?php 
Class MiControlador extends CI_Controller{
	function index()
	{
		$this->load->view('miVista');
	}
	function cargarVistas()
	{
		$datos = array('titulo' => "Pagina de prueba",
				'descripcion'=> "esta descripcion es de prueba",
				'cuerpo'=> "El cuerpo sera muy extenso " );

		$cadena = $this->load->view('miVista', $datos, true); //almaceno toda la vosta en esa variable
		$this->load->view('plantillas/cabeceraprueba');
		$this->load->view('formularioPrueba');
		$this->load->view('plantillas/footer');

		//$this->load->view('miVista',$datos);
		echo $cadena;// imprimo la vista desde la variable
	}
}
?>