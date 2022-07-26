<?php require_once '../app/views/inc/header.php'; ?>



<br><br>
<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-5  ">
            <form method="POST" id="formUsuarios" class="text-white bg-dark p-3 border border-1 rounded  w-75 mx-auto ">
                <div class="form-group">
                    <label for="">Ingrese su primer nombre</label>
                    <input type="text"   class="form-control" name="nombre1" placeholder="Ingrese su primer nombre" required> <br>
                </div>
                <div class="form-group">
                    <label for="">Ingrese su segundo nombre</label>
                    <input type="text" class="form-control  " name="nombre2" placeholder="Ingrese su segundo nombre" required><br>
                </div>
                <div class="form-group">
                    <label for="">Ingrese su primer apellido</label>
                    <input type="text" class="form-control" name="Apellido1" placeholder="Ingrese su primer apellido" required><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese su segundo apellido</label>
                    <input type="text" class="form-control" name="Apellido2" placeholder="Ingrese su segundo apellido" required><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese su telefono</label>
                    <input type="text" class="form-control" name="telefonoUsuario" placeholder="Ingrese su telefono" required><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese su Correo</label>
                    <input type="email" class="form-control" name="correoUsuario" placeholder="Ingrese su Correo" required><br>
                </div>

                <div class="form-group">
                    <label for="">Crear Usuario</label>
                    <input type="text" class="form-control" name="usuario" placeholder="Crear Usuario" required><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Ingrese Password" required ><br>
                </div>

                <div class="form-group">
                    <label for="">Seleccione el Rol</label>
                    <select require class="form-control" name="rol">
                        <option value="1">Administrador</option>
                        <option value="2" >Bibliotecario</option>
                    </select>
                </div>
                <br>
                <input id="enviarDatos"  value="Registrar" type="submit" class="btn btn-primary w-50 "></input>
            </form>
        </div>




        <div class="col-md-6 bg-dark border border-1 rounded  table-responsive ">
            <br>
            <table class="table table-dark table-hover  table-striped">

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">PrimerNombre</th>
                    <th scope="col">SegundoNombre</th>
                    <th scope="col">PrimerApellido</th>
                    <th scope="col">segundoApellido</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Password</th>
                    <th scope="col">RolID</th>

                </tr>

                <?php foreach($data as $recorrer) :   ?>

                    <tr>
                        
                        <td><?php echo $recorrer->idUsuarios; ?></td>
                        <td><?php echo $recorrer->Nombre1; ?></td>
                        <td><?php echo $recorrer->Nombre2; ?></td>
                        <td><?php echo $recorrer->Apellido1; ?></td>
                        <td><?php echo $recorrer->Apellido2; ?></td>
                        <td><?php echo $recorrer->Telefono; ?></td>
                        <td><?php echo $recorrer->correo; ?></td>
                        <td><?php echo $recorrer->Usuario; ?></td>
                        <td><?php echo $recorrer->Passwordd;?></td>
                        <td><?php echo $recorrer->Roles_idRoles;?></td>

                        <td><a class="btn btn-danger" href="">Eliminar</a></td>
                        <td><a class="btn btn-primary" href="">Editar</a></td>

                    </tr>

                <?php endforeach ?>

            </table>
        </div>


    </div>


    <?php require_once APPROOT . "/views/inc/footer.php"; ?>