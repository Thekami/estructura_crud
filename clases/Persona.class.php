<?php  

	require_once('MySQL.class.php');

	Class Persona extends MySQL{

		public function read($info){
			
			if ($info == 2) {
				$consulta = "SELECT id, CONCAT(primer_ap,' ',segundo_ap,' ',nombres) nombre, 
			                 direccion, telefono, IF(status = 1, 'Activo', 'Inactivo') status
			                 FROM personas"; 
			}
			else{
				$consulta = "SELECT id, CONCAT(primer_ap,' ',segundo_ap,' ',nombres) nombre, 
			                 direccion, telefono, IF(status = 1, 'Activo', 'Inactivo') status
			                 FROM personas WHERE status = $info"; 
			}

			return $this->query_row($consulta); 
		}


		public function busqueda($info){
			$consulta = "SELECT id, CONCAT(primer_ap,' ',segundo_ap,' ',nombres) nombre, 
			             direccion, telefono, IF(status = 1, 'Activo', 'Inactivo') status
			             FROM personas 
			             WHERE nombres LIKE '%{$info}%' 
			             OR primer_ap LIKE '%{$info}%'
			             OR segundo_ap LIKE '%{$info}%'";

			             // echo $consulta; exit;

			return $this->query_row($consulta); 
		}

	}
	
?>