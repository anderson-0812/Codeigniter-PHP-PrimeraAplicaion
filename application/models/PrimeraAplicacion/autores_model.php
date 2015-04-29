<?php 
Class Autores_model extends CI_Model{

	function __construc(){
		parent::Model;
	}

	function dame_autores(){
		/*$this->db->select('id_autor','nombre','apellido','email');
		$this->db->from('autores');
		$consulta = $this->db->get();
		$resultado = $consulta->result();
		return $resultado;*/
		$ssql = "select * from autores order by apellido";
			return mysql_query($ssql);
	}
	function crear_autor($id,$nombre,$apellido,$email){
		// creo un array con todos los datos los nombres de las comillas son los de las columnas de la tabla
					$datos_autor  = array('id_autor' => $idAutor,
									 'nombre'=> $nombre,
									 'apellido' => $apellido,
									 'email' => $email );
	}
}
 ?>