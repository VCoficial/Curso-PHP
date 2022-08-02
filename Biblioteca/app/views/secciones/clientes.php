<?php require_once '../app/views/inc/header.php'; ?>


<br><br>
<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-5 ">
            <form method="POST" action="<?php echo URLROOT; ?>Clientes/InsertarClientes" id="formClientes" class="text-white w-75 mx-auto bg-dark p-3 border border-1 rounded ">
                <div class="form-group">
                    <label for="">Identificacion</label>
                    <input type="text" class="form-control" placeholder="Ingrese la identificacion" name="identificacion" required> <br>
                </div>
                <div class="form-group">
                    <label for="">Ingrese su Primer nombre</label>
                    <input type="text" class="form-control  " name="nombre1" required placeholder="Ingrese su Primer nombre"><br>
                </div>
                <div class="form-group">
                    <label for="">Ingrese su segundo nombre</label>
                    <input type="text" class="form-control" name="nombre2" required placeholder="Ingrese su segundo nombre"><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese su primer apellido</label>
                    <input type="text" class="form-control" name="Apellido1" required placeholder="Ingrese su primer apellido"><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese su segundo apellido</label>
                    <input type="text" class="form-control" name="Apellido2" required placeholder="Ingrese su segundo apellido"><br>
                </div>

                <div class="form-group">
                    <label for="">Telefono</label>
                    <input type="text" class="form-control" name="telefonoCliente" required placeholder="Telefono"><br>
                </div>

                <div class="form-group">
                    <label for="">Correo</label>
                    <input type="text" class="form-control" name="correoCliente" required placeholder="Correo"><br>
                </div>

                <div class="form-group">
                    <label for="">Veces Prestado</label>
                    <input type="number" class="form-control" name="vecesPrestado" required placeholder="Veces prestado"><br>
                </div>
                <br>
                <input value="Registrar Cliente" type="submit" class="btn btn-primary w-50 "></input>
            </form><br>
        </div>

        <div class="col-md-6 bg-dark border border-1 rounded table-responsive ">
            <br>
            <form class="d-flex justify-content-around" action="">
                <input placeholder="Buscar Cliente" type="text" class="form-control w-50 ml-2 ">
                <input type="submit" value="Buscar" class=" text-white  border border-1 border-dark form-control bg-success ml-2  w-25 ">
            </form><br>
            <table class="table table-dark table-hover table-striped">

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Penalizacion</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">SegundoNombre</th>
                    <th scope="col">PrimerApellido</th>
                    <th scope="col">segundoApellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">VecesPrestado</th>


                </tr>

                <?php foreach ($data as $recorrer) :   ?>

                    <tr>
                        <td><?php echo $recorrer->idCliente; ?></td>
                        <td><?php echo $recorrer->Identificacion; ?></td>
                        <td><?php echo $recorrer->Penalizacion; ?></td>
                        <td><?php echo $recorrer->Nombre1; ?></td>
                        <td><?php echo $recorrer->Nombre2; ?></td>
                        <td><?php echo $recorrer->Apellido1; ?></td>
                        <td><?php echo $recorrer->Apellido2; ?></td>
                        <td><?php echo $recorrer->Telefono; ?></td>
                        <td><?php echo $recorrer->Correo; ?></td>
                        <td><?php echo $recorrer->vecesPrestado; ?></td>
                        <td>
                            <a type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Editar
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>

            </table>
        </div>

        <div class="modal fade bg-dark " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registrar Editorial</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="text-center" action="">
                            <div class="form-group">
                                <label for="">Identificacion</label>
                                <input type="text" value="<?php echo $recorrer->Identificacion; ?>" class="form-control" placeholder="Ingrese la identificacion" id="identifiacion" required> <br>
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de Penalizacion</label>
                                <input type="date" class="form-control" id="fechaPenalizacion" required> <br>
                            </div>
                            <div class="form-group">
                                <label for="">Ingrese su Primer nombre</label>
                                <input type="text" value="<?php echo $recorrer->Nombre1; ?>" class="form-control  " id="nombre1" required placeholder="Ingrese su Primer nombre"><br>
                            </div>
                            <div class="form-group">
                                <label for="">Ingrese su segundo nombre</label>
                                <input type="text" value="<?php echo $recorrer->Nombre2; ?>" class="form-control" id="nombre2" required placeholder="Ingrese su segundo nombre"><br>
                            </div>

                            <div class="form-group">
                                <label for="">Ingrese su primer apellido</label>
                                <input type="text" value="<?php echo $recorrer->Apellido1; ?>" class="form-control" id="Apellido1" required placeholder="Ingrese su primer apellido"><br>
                            </div>
                            <div class="form-group">
                                <label for="">Ingrese su segundo apellido</label>
                                <input type="text" value="<?php echo $recorrer->Apellido2; ?>" class="form-control" id="Apellido2" required placeholder="Ingrese su segundo apellido"><br>
                            </div>

                            <div class="form-group">
                                <label for="">Telefono</label>
                                <input type="text" value="<?php echo $recorrer->Telefono; ?>" class="form-control" id="telefonoCliente" required placeholder="Telefono"><br>
                            </div>

                            <div class="form-group">
                                <label for="">Correo</label>
                                <input type="text" value="<?php echo $recorrer->Correo; ?>" class="form-control" id="correoCliente" required placeholder="Correo"><br>
                            </div>

                            <div class="form-group">
                                <label for="">Veces Prestado</label>
                                <input type="number" value="<?php echo $recorrer->vecesPrestado; ?>" class="form-control" id="vecesPrestado" required placeholder="Correo"><br>
                            </div>
                            <input value="Actualizar Cliente" type="submit" class="btn btn-primary w-50 "></input>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <?php require_once '../app/views/inc/footer.php'; ?>