<?php require_once APPROOT . "/views/inc/header.php"; ?>



<br><br>
<div class="container-fluid  ">

    <div class="row text-center ">
        <div class="col-md-6  ">
            <form class="text-white  bg-dark p-3 border border-1 rounded w-75 mx-auto ">
                <div class="form-group">
                    <label for="">Ingrese el nombre del libro</label>
                    <input type="text" class="form-control" id="nombreLibro" placeholder="Nombre del libro" required> <br>
                </div>
                <div class="form-group">
                    <label for="">Selecione el editoral del libro</label>
                    <select required class="form-control" id="idEditorial">
                        <option>Elegir Editorial</option>
                        <option>Editorial Mirahadas</option>
                        <option>Editorial Errata Naturae</option>
                        <option>Editorial Pre-textos</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="">Fecha de Ingreso</label>
                    <input type="date" class="form-control" id="fechaIngresoLibro" placeholder="Fecha de ingreso" required><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese el autor del libro</label>
                    <input type="text" class="form-control" id="AutorLibro" placeholder="Autor" required><br>
                </div>

                <div class="form-group">
                    <label for="">Ingrese la fecha de publicacion del libro</label>
                    <input type="date" class="form-control" id="FechaPublicacionLibro" placeholder="Fecha de Publicacion" required><br>
                </div>

                

                <div class="form-group">
                    <label for="">Cantidad</label>
                    <input type="number" class="form-control" id="FechaPublicacionLibro" placeholder="Cantidad" required><br>
                </div>




                <div class="d-flex  ">
                    <input value="Registrar Libro" type="submit" class="btn btn-primary w-50 m-1  "></input>
                    <button type="button" class="btn btn-success w-50 m-1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Registrar Editorial
                    </button>
                </div>


            </form>
        </div>




        <div class="col-md-5 bg-dark  table-responsive border border-1 rounded   table-responsive "><br>
            <form class="d-flex  justify-content-around " action="">

                <input placeholder="Buscar un Libro" type="text" class="form-control w-50 ml-2 ">
                <input type="submit" value="Buscar Libro" class="form-control ml-2 text-white border border-1 border-dark  bg-success w-25 ">
            </form><br>
            <table class="table table-dark table-hover  table-striped">

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NombreLibro</th>
                    <th scope="col">idEditorial</th>
                    <th scope="col">FechaDeIngreso</th>
                    <th scope="col">Autor</th>
                    <th scope="col">fechaPublicacion</th>
                    <th scope="col">Cantidad</th>


                </tr>


                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>

            </table>
        </div>


    </div>


    <!-- Button trigger modal -->
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade bg-dark " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar Editorial</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="text-center" action="">
                        <label for="">Ingrese el nombre del editorial</label><br>
                        <input type="text" class="form-control" placeholder="Ingrese el nombre del editorial">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>







<?php require_once '../app/views/inc/footer.php'; ?>