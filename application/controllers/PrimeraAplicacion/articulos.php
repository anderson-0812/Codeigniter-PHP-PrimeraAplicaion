<?php 
//URL http://localhost/index.php/PrimeraAplicacion/articulos
// http://localhost/index.php/Dierectorio/Controlador
Class Articulos extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		//cargo helper de url, con funciones  para trabajo con URL del sitio 
		$this->load->helper('url');
		// cago helper para los formularios
		$this->load->helper('form');

		//cargo el modelo
		$this->load->model('PrimeraAplicacion/Articulo_model');
		$this->load->model('PrimeraAplicacion/Autores_model');
	}
	function index()
	{
		//pido los  articulos al modelo
		$TodoslosArticulos = $this->Articulo_model->dame_articulos();

		//creo array con datos de configuracion para la vista
		$datos_vista  = array('rs_articulos' =>$TodoslosArticulos);// segun yo el 1er parametro es el nombre del segundo 
		
		// cargo la vista pasando los datos de configuracion 
		$this->load->view('PrimeraAplicacion/home',$datos_vista);
	}
	// Gestionar Articulos
	function crearArticulo(){
		$arrayArticulo  = 'null';//declaro vacio
		$arrayDatos ['articulos'] = $arrayArticulo ;

		$autores = $this->Autores_model->dame_autores();
		while ( $Autor = mysql_fetch_array($autores)) {
			$array_autores[] = $Autor;
		}
		
		//$array_autores = array('arrayAutores' => $autores );

		$arrayDatos ['autores'] = $array_autores;
		$arrayDatos ['update'] =0; // bandera desde crear  
		print_r($arrayDatos['update']);
		print_r($arrayDatos['articulos']);
		$this->load->view('PrimeraAplicacion/crear_articulo',$arrayDatos);
	}
	function editarArticulo($id){
		//obtengo los datos del articulo por mediio del parametro de busqueda
		$arrayArticulo = $this->Articulo_model->dame_articulo($id);
		$arrayDatos ['articulos'] = $arrayArticulo ;

		$autores = $this->Autores_model->dame_autores();
		while ( $Autor = mysql_fetch_array($autores)) {
			$array_autores[] = $Autor;
		}
		
		//$array_autores = array('arrayAutores' => $autores );

		$arrayDatos ['autores'] = $array_autores;
		$arrayDatos ['update'] = 1; // bandera desde editar para poder elegir q accion hace el boton guadar articulo (editar/crear)


		//print_r($arrayDatos['autores']);
		if(!$arrayArticulo){
			// lanzo erro 404
			//echo "no tiene valor";
			show_404();
		}else{
			//$this->crearArticulo($arrayArticulo);
			$this->load->view('PrimeraAplicacion/crear_articulo',$arrayDatos);

		}
	}
	function eliminarArticulo($id_articulo){
		// llamo al metodo eliminar
		$this->Articulo_model->eliminar_articulo($id_articulo);
		echo "Articulo Eliminado";
		$this->index();
	}
	function validarAccionBotonArticulo(){
		// tomo los valores del formulario e ingreso en variables isset es para comprobar q las variables no sean null
		if(isset($_POST['titulo'])){
			$titulo = htmlspecialchars($_POST['titulo']); 
			echo "Prueba titulo" . $titulo;
		}else{
			echo "Valor nulo";
			$titulo=null;
		} 
		//descripcion
		if(isset($_POST['descripcion'])){
		 	$descripcion = htmlspecialchars($_POST['descripcion']); 
		 	echo "Prueba descripcion" . $descripcion;
		}else{
			$descripcion=null;
		} 
		//cuerpo
		if(isset($_POST['cuerpo'])){
		 	$cuerpo = htmlspecialchars($_POST['cuerpo']); 
		 	echo "Prueba cuerpo" . $cuerpo;
		}else{
			$cuerpo=null;
		} 
		// lista_autores
		if(isset($_POST['lista_autores'])){
		 	$lista_autores_id = htmlspecialchars($_POST['lista_autores']); 
		 	echo "Prueba id_autor" . $lista_autores_id;
		}else{
			$lista_autores_id=null;
		}

		// llamo al metodo del modelo
		if ($_POST['update']== '0') {
			echo "ENTRO AL BOTON CREAR";
			if (isset($_POST['submit'])) {
				$this->Articulo_model->crear_articulo($titulo,$descripcion,$cuerpo,$lista_autores_id);
				$this->index();
				echo "Articulo creadoo";
			}
		}else{
			if (isset($_POST['submit'])) {
				$id_articulo = $_POST['idArticulo'];//almaceno el id de la tabla articulo q esta cargado
				$this->Articulo_model->actualizar_articulo($id_articulo, $titulo,$descripcion,$cuerpo,$lista_autores_id);
				echo "ARTICULO ACTUALIZADO ";
			}
		}
		
	}
	function muestra($id){
		// cargo los helper de las URLs
		//$this->load->helper('url');

		// cargo el modelo 
		//$this->load->model('PrimeraAplicacion/Articulo_model');

		//obtengo los datos del articulo por mediio del parametro de busqueda
		$arrayArticulo = $this->Articulo_model->dame_articulo($id);
		if(!$arrayArticulo){
			// lanzo erro 404
			//echo "no tiene valor";
			show_404();
		}else{
			$this->load->view('PrimeraAplicacion/muestra_articulo',$arrayArticulo);

		}
	}
}
 ?>