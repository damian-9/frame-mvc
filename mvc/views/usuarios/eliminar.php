<div class="col-md-8 col-md-offset-1">
    <table class="table table-hover">
        <tr>
            <td>Nombre</td>
            <td>Apellido</td>
            <td>Correo</td>
            <td>Accion</td>
        </tr>

        <?php
            while ($user = $resultUser->fetch_object()): ?>
                <tr>
                    <td><?=$user->nombre?></td>
                    <td><?=$user->apellido?></td>
                    <td><?=$user->email?></td>
                    <td>
                    <a href="index.php?controller=usuariocontroller&action=eliminar&id=<?php echo $user->id; ?>"
                    <button class="btn btn-danger" type="submit" >Eliminar </button></a>    
                    </td>   
                </tr>
            <?php endwhile; ?>
    </table>

</div>
