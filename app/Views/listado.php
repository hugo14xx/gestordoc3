


<div class="container"> 
    <h1>CRUD con Codeigniter</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method = "POST" action="<?php echo base_url().'/crear' ?>">

                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
                <label for="paterno">Paterno</label>
                <input type="text" name="paterno" id="paterno" class="form-control">
                <label for="paterno">Materno</label>
                <input type="text" name="materno" id="materno" class="form-control">
                <br>
                <button class="btn btn-primary"> Guardar </button>




                
                </form>
            </div> 
        </div>
    <hr>
    <h2>Listado de personas</h2>

  

    <div class="row">
        <div class="col-sm1-2">
            <div class="table table-responsive">

                <table class="table table hover table-bordered">
                    <tr>
                        <th>Nombre</th>
                        <th>Paterno</th>
                        <th>Materno</th>

                        <th>Editar </th>
                        <th>Eliminar</th>

                    </tr>

                    <?php foreach($datos as $key): ?>

                        <tr>
                            <td><?php echo $key->nombre ?> </td>
                            <td> <?php echo $key->paterno ?> </td>
                            <td> <?php echo $key->materno ?> </td>

                            <td> 
                                <a href=" <?php echo base_url().'/obtenerNombre/'.$key->id_nombre ?>" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                           
                            <td> 
                                <a href=" <?php echo base_url().'/eliminar/'.$key->id_nombre ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>



                        </tr>



                        <?php endforeach;?>




                </table>
            </div>

        </div>
    
    </div>



</div>
                           
    <script type="text/javascript">

        let mensaje = '<?php echo $mensaje ?>';

        if (mensaje=='1')
        {

            alert("agregado con exito");
        }

        else if (mensaje=='0')
        {
            alert ("no se agrego");
        }

        
        else if (mensaje=='2')
        {
            alert ("actualizado con exito");
        }

        
        else if (mensaje=='3')
        {
            alert ("no se actualizo");
        }

        else if (mensaje=='4')
        {
            alert ("eliminado con exito");
        }

        
        else if (mensaje=='5')
        {
            alert ("no se elimino");
        }

    </script>

</html>