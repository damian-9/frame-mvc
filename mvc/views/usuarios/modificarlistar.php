<?php
 require_once 'controllers/UsuarioController.php';
 $var = new usuariocontroller;
 $resul= $var->modificarlistar(); 
?>


<div class="panel panel-primary col-md-8 col-md-offset-2">
    <div class="panel-heading">
        Crear usuarios
    </div>

    <div class="panel-body">

        <form action="index.php?controller=UsuarioController&action=actualizar" method="POST">

           <label class="control-label"></label>
           <input type="hidden" class="form-control" type="text" name="txtid" value="<?php echo $resul= $var->modificarlistar();?>">

            <label class="control-label">Nombre</label>
            <input class="form-control" type="text" name="txtNombre">

            <label class="control-label">Apellido</label>
            <input class="form-control" type="text" name="txtApellido">

            <label class="control-label">Email</label>
            <input class="form-control"type="text" name="txtEmail">
            <hr>
            <a href="index.php?controller=UsuarioController&action=actualizar">
            <button class="btn btn-warning" type="submit" >Actualizar</button>
            </a>
        </form>
    </div>
</div>