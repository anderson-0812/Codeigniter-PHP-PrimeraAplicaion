<?php 
	Class Articulo_model extends CI_Model{
		function __costruct(){
			parent::Model();
		}
		function dame_articulos(){
			$ssql = "select * from articulo order by id desc";
			return mysql_query($ssql);
		}

		function dame_articulo($id){
			$ssql = "select * from articulo where id =" . $id;
			$rs = mysql_query($ssql);
			if(mysql_num_rows($rs)==0){
				return false;
			}else {
				return mysql_fetch_array($rs);
			}
		}
		function crear_articulo($titulo,$descripcion,$cuerpo,$lista_autores_id){
			// creo un array con todos los datos los nombres de las comillas son los de las columnas de la tabla
			$datos_articulo  = array('titulo' => $titulo,
									 'descripcion'=> $descripcion,
									 'cuerpo' => $cuerpo,
									 'id_autor' => $lista_autores_id );
			// Usu la funcion insert que me permite decir el nombre de la tabla y el array de parametro
			$this->db->insert('articulo',$datos_articulo);
		}
		function actualizar_articulo($id_articulo, $titulo,$descripcion,$cuerpo,$lista_autores_id){
			$datos_articulo  = array('id' => $id_articulo,
									'titulo' => $titulo,
									 'descripcion'=> $descripcion,
									 'cuerpo' => $cuerpo,
									 'id_autor' => $lista_autores_id );

			// actualizo
			$this->db->where('id',$id_articulo);
			$this->db->update('articulo',$datos_articulo);
		}

		function eliminar_articulo($id_articulo){
			$this->db->where('id',$id_articulo);
			$this->db->delete('articulo');
		}
	}
 ?>