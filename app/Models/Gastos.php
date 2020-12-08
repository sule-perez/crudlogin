<?php namespace App\Models;

	use CodeIgniter\Model;

 	class gastos extends Model{
 		public function listarGastos(){
 			$Gastos = $this->db->query("SELECT * FROM t_gastos");
 			return $Gastos->getResult();
 		}
 		public function insertar($datos){
 			$Gastos = $this->db->table('t_gastos');
 			$Gastos->insert($datos);

 			return $this->db->insertID();
 		}
 	}