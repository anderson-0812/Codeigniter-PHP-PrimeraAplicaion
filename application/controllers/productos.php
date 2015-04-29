<?php 
Class Productos extends CI_Controller{
	function index(){
		echo 'Esto es la portada de productos';
	}
	function ordenadores($marca = null, $modelo= null){
		
		if(is_null($marca)&& is_null($modelo)){
			echo 'Esto es toda la lista de ordenadores';
		} 
		elseif(is_null($modelo)){
			echo 'Esta es la Lista de ordenadores de marca '. $marca;
		}else{
			echo 'Mostrando ordenadores de marca '. $marca . 'y modelo '. $modelo;
		}

	}
	function monitores(){
		echo 'Aqui se muestra la lista de monitores';
	}
	function perifericos($modelo = null){
		if(is_null($modelo)){
			echo "No hay perifericos elegidos";
		}else{
			echo "Estas viendo el periferico \t". $modelo;
		}		
	}
}
?>