<?php require_once '../app/views/inc/header.php'; ?>

<br><br>
<div class="container-fluid  ">
    <div class="row text-center ">
        <div class="col-md-6  ">
            <form class=" border border-1 rounded bg-dark p-3 mx-auto w-75 d-flex justify-content-around " action="">
                <input type=" text" class="form-control w-75  " id="buscarLibro" placeholder="Buscar Libro" required> <br>
                <input type="submit" class="btn btn-success" value="Buscar Libro "></input>
            </form><br>
            <form class=" border border-1 rounded bg-dark p-3 mx-auto w-75 d-flex justify-content-around " action="">
                <input type=" text" class="form-control w-75  " id="buscarCliente" placeholder="Buscar Cliente" required> <br>
                <input type="submit" class="btn btn-success" value="Buscar Cliente"></input>
            </form><br>
            <form class="text-white  bg-dark p-3 border border-1 rounded w-75 mx-auto ">

                <div class="form-group">
                    <label for="">Libro</label>
                    <select disabled class="form-control" id="idLibro">
                        <option value="">Libro</option>
                    </select><br>
                </div>
                <div class="form-group">
                    <label for="">Selecione el Cliente a prestar</label>
                    <select disabled class="form-control" id="idCliente">
                        <option>Cliente</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Fecha de Prestamo</label>
                    <input type="date" class="form-control" id="fechaInicioPrestamo" placeholder="Fecha de ingreso"><br>
                </div>

                <div class="form-group">
                    <label for="">Fecha de entrega</label>
                    <input type="date" class="form-control" id="fechaEntregaLibro" placeholder="Autor"><br>
                </div>
                <div class="form-group">
                    <label for="">Prestador</label>
                    <input disabled type="text" class="form-control" id="idPrestador" placeholder="prestador"><br>
                </div>
                <div class="  ">
                    <input value="Registrar Prestamo" type="submit" class="btn btn-primary w-50 m-1  "></input>
                </div>
            </form><br>
        </div>

        <div class="col-md-5 bg-dark  table-responsive border border-1 rounded   table-responsive "><br>
            <form class="d-flex  justify-content-around " action="">

                <input placeholder="Buscar Prestamos" type="text" class="form-control w-50 ml-2 ">
                <input type="submit" value="Buscar" class="form-control ml-2 border border-1 border-dark  text-white bg-success w-25 ">
            </form><br>
            <table class="table table-dark table-hover  table-striped">

                <tr>
                    <th scope="col">idPrestamo</th>
                    <th scope="col">idLibro</th>
                    <th scope="col">idCliente</th>
                    <th scope="col">FechaInicioPrestamo</th>
                    <th scope="col">FechaEntregaLibro</th>
                    <th scope="col">Prestador</th>
                </tr>

                <?php foreach ($data as $recorrer) :   ?>

                    <tr>
                        <td><?php echo $recorrer->idPrestamo; ?></td>
                        <td><?php echo $recorrer->Libros_idLibro; ?></td>
                        <td><?php echo $recorrer->Clientes_idCliente; ?></td>
                        <td><?php echo $recorrer->FechaInicio; ?></td>
                        <td><?php echo $recorrer->FechaEntrega; ?></td>
                        <td><?php echo $recorrer->Prestador; ?></td>
                        <td>
                            <a type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Editar
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>

            </table>
        </div>


    </div>

</div>



<?php require_once '../app/views/inc/footer.php'; ?>