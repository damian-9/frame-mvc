<?php
require_once 'config/database.php';
class ModeloBase{
        public $db;
        public function __construct(){
            $this->db = database::conectar();
        }

        public function MostrarTodos($tabla){
            $query=$this->db->query("SELECT * FROM $tabla");
            return $query;
        }

        public function eliminar($variable){
            $query=$this->db->query("DELETE FROM usuarios WHERE id=$variable");
            return $query; 
        }
        
    }

?>