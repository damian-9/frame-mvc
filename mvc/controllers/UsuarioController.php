<?php
  class UsuarioController{

    public function crear(){
      require_once 'views/usuarios/crear.php';
    }

    public function guardar(){
      require_once 'models/Usuario.php';
      $user = new Usuario();  
      $user->setNombre($_POST['txtNombre']);
      $user->setApellido($_POST['txtApellido']);
      $user->setEmail($_POST['txtEmail']);
      $guardar = $user->Create();
    }

    public function mostrarTodos(){
      require_once 'models/Usuario.php';
      $user = new Usuario();
      $resultUser= $user->mostrarTodos('usuarios'); 
      require_once 'views/usuarios/mostrar.php'; 
    }

    public function actualizar(){
      require_once 'models/Usuario.php';
      $user = new Usuario();  
      $user->setid($_POST['txtid']);
      $user->setNombre($_POST['txtNombre']);
      $user->setApellido($_POST['txtApellido']);
      $user->setEmail($_POST['txtEmail']);
      $pk= $_POST['txtid'];
      $actualizar = $user->actualizar($pk);
    }
      
    public function Listareliminar(){
      require_once 'models/Usuario.php';
      $user = new Usuario();
      $resultUser= $user->mostrarTodos('usuarios'); 
      require_once 'views/usuarios/eliminar.php'; 
    }
    
    public function eliminar(){
      require_once 'models/Usuario.php';
      require_once 'models/ModeloBase.php';
      $variable = $_GET['id'];
      echo $variable;
        $obj = new ModeloBase();
        $obj->eliminar($variable);
      $user = new Usuario();
      $resultUser= $user->eliminar('usuarios'); 
    }

    public function buscar(){}

    public function listarmodificar(){
      require_once 'models/Usuario.php';
      $user = new Usuario();
      $resultUser= $user->mostrarTodos('usuarios'); 
      require_once 'views/usuarios/modificar.php'; 
    }

    public function modificar(){
      require_once 'models/Usuario.php';
      require_once 'models/ModeloBase.php';
      $variable = $_GET['id'];
      echo $variable;
        $obj = new ModeloBase();
        $obj->modificar($variable);
      $user = new Usuario();
      $resultUser= $user->modificar('usuarios'); 
    }

    public function modificarlistar(){
      require_once 'views/usuarios/modificarlistar.php';
      require_once 'models/Usuario.php';
      $variable = $_GET['id'];
      $user = new Usuario();    
      return $variable;  
    }
  }
?>