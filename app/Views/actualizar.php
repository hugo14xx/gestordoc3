<?php 
$idNombre= $datos[0]['id_nombre'];
$nombre= $datos[0]['nombre'];
$paterno= $datos[0]['paterno'];
$materno= $datos[0]['materno'];
?>

<h1>CRUD con Codeigniter</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method = "POST" action="<?php echo base_url().'/actualizar' ?>">

                <label for="nombre">id</label>
                <input type="text" name="idNombre" id="idNombre" hidden=""
                 value=<?php echo $idNombre ?>>
                <?php echo $idNombre ?>
                <br>


                <label for="paterno">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" 
                 value= "<?php echo $nombre ?>">


                <label for="paterno">Paterno</label>
                <input type="text" name="paterno" id="paterno" class="form-control"
                 value= "<?php echo $paterno ?>">

                <label for="paterno">Apellido</label>
                <input type="text" name="materno" id="materno" class="form-control" 
                 value= "<?php echo $materno ?>">
                <br>
                <button class="btn btn-primary"> Guardar </button>
                <td> 
                                <a href=" <?php echo base_url().'/Crud'?>" class="btn btn-warning btn-sm">Regresar</a>
                            </td>



                
                </form>
            </div> 
        </div>