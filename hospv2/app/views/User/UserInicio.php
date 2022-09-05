<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Panel de Control HOSPISOFT</title>
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>css/bootstrap-icons.css">
    <link rel="icon" type="image/png" href="<?php echo URLROOT; ?>img/logo.png">
    <!-- <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" ></script> -->
    <link href="<?php echo URLROOT; ?>css/dashboard.css" rel="stylesheet">
</head>

<body class="bg-light p-2 text-dark">
    <div class="row">

        <div class="col-md-4 mx-auto">

            <div class="card card-body bg-light mt-5 shadow">
                <div class="card-header mx-auto">
                    <img src="<?php echo URLROOT; ?>img/logo.png" class="img-fluid rounded" alt="">
                </div>
                <form action="<?php echo URLROOT; ?>User/login" method="POST">
                    <div class="mb-3 mt-2">
                        <label for="user" class="form-label">Usuario:</label>
                        <input type="email" name="email" id="email" class="form-control form-control-sm" required>
                        <label for="password" class="form-label">Clave:</label>
                        <input type="password" name="password" id=password" class="form-control form-control-sm" required>
                    </div>
                    <div class="row mt-5">
                        <div class="col d-grid gap-2">
                            <button type="button" class="btn btn-secondary btn-sm ">Cancelar</button>
                        </div>
                        <div class="col d-grid gap-2">
                            <input type="submit" class="btn btn-success btn-sm " value="Enviar">
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
    <script src="<?php echo URLROOT; ?>js/bootstrap.bundle.min.js"></script>
</body>

</html>