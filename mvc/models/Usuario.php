<?php
require_once 'ModeloBase.php';

    class Usuario extends ModeloBase{
        public $id;
        public $nombre;
        public $apellido;
        public $email;


        public function __construct(){
            parent::__construct(); 
        }

        public function setid($id){
            $this->id=$id;
        } 
            
        public function getid(){
            $this->id=$id;
        } 

        public function setNombre($nombre){
            $this->nombre=$nombre;
        } 
        public function getNombree(){
            $this->nombre=$nombre;
        } 
        
        public function setApellido($apellido){
            $this->apellido=$apellido;
        } 
        public function getApellido(){
            $this->apellido=$apellido;
        } 

        public function setEmail($email){
            $this->email=$email;
        } 
        public function getEmail(){
            $this->email=$email;
        } 

        public function Create(){
            $sql =  "INSERT INTO usuarios(nombre,apellido,email) VALUES ('{$this->nombre}','{$this->apellido}','{$this->email}')" ;
            $guardado = $this->db->query($sql);
            return $guardado;
        }
                
        public function actualizar($pk){ 
            $sql =  "UPDATE usuarios SET nombre='{$this->nombre}', apellido='{$this->apellido}', email='{$this->email}' WHERE id=$pk";
            $guardado = $this->db->query($sql);
            return $guardado;
        }
    }
?>