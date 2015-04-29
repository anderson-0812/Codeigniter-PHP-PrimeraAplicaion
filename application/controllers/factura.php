<?php 
class Factura extends CI_Controller{
	function mostrar_factura($id_factura){
		$this->load->model('Factura_model');
		$factura= $this->Factura_model->dame_factura_id($id_factura);
		$this->load->view('model_factura',$factura);
	}
	/*
	Este controlador llamado Factura tiene una función para mostrar una factura, 
	que recibe el identificador de la factura que se desea ver.
	En dicha función se carga el modelo adecuado para el trabajo con facturas 
	"Factura_model". Luego llamamos a la función dame_factura_id() del modelo 
	cargado, a la que le pasamos el identificador de la factura que deseábamos ver. La función dame_factura_id() del modelo devuelve un array con los datos de la factura. Luego mostramos los datos de la factura con la vista "mostrar_factura" y con los datos de configuración, que es el array que obtuvimos al invocar la función del modelo.
	*/
	
}
 ?>