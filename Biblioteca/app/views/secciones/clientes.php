<?php require_once '../app/views/inc/header.php'; ?>


<br><br>
<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-5 ">
            <form class="text-white w-75 mx-auto bg-dark p-3 border border-1 rounded ">

                <div class="form-group">

                    <label for="">Identificacion</label>
                    <input type="text" class="form-control" placeholder="Ingrese la identificacion" id="identifiacion" required> <br>
                </div>

                <div class="form-group">

                    <label for="">Fecha de Penalizacion</label>
                    <input type="date" class="form-control" id="fechaPenalizacion" required> <br>
                </div>
                <div class="form-group">
                    <label for="">Ingrese su Primer nombre</label>
                    <input type="text" class="form-control  " id="nombre1" required placeholder="Ingrese su Primer nombre"><br>
                </div>
                <div class="form-group">
                    <label for="">Ingrese su segundo nombre</label>
                    <input type="text" class="form-control" id="nombre2" required placeholder="Ingrese su segundo nombre"><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese su primer apellido</label>
                    <input type="text" class="form-control" id="Apellido1" required placeholder="Ingrese su primer apellido"><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese su segundo apellido</label>
                    <input type="text" class="form-control" id="Apellido2" required placeholder="Ingrese su segundo apellido"><br>
                </div>

                <div class="form-group">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" id="telefonoCliente" required placeholder="Telefono"><br>
                </div>

                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" class="form-control" id="correoCliente" required placeholder="Correo"><br>
                </div>

                <div class="form-group">
                    <label for="">VecesPrestado</label>
                    <input type="text" class="form-control" id="vecesPrestado" required placeholder="Correo"><br>
                </div>

                <br>
                <input value="Registar Cliente" type="submit" class="btn btn-primary w-50 "></input>
            </form>
        </div>




        <div class="col-md-6 bg-dark border border-1 rounded  table-responsive ">
            <br>
            <form class="d-flex  justify-content-around " action="">

                <input placeholder="Buscar Cliente" type="text" class="form-control w-50 ml-2 ">
                <input type="submit" value="Buscar" class=" text-white  border border-1 border-dark form-control bg-success ml-2  w-25 ">
            </form><br>
            <table class="table table-dark table-hover  table-striped">

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Penalizacion</th>
                    <th scope="col">PrimerNombre</th>
                    <th scope="col">SegundoNombre</th>
                    <th scope="col">PrimerApellido</th>
                    <th scope="col">segundoApellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">VecesPrestado</th>


                </tr>

                <?php for ($i = 0; $i <= 10; $i++) :   ?>

                    <tr>
                        <th scope="row">1</th>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $i; ?></td>

                        <td><a class="btn btn-danger" href="">Eliminar</a></td>
                        <td><a class="btn btn-primary" href="">Editar</a></td>

                    </tr>

                <?php endfor ?>

            </table>
        </div>


    </div>

    <?php require_once '../app/views/inc/footer.php'; ?>