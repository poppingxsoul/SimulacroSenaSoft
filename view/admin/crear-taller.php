<?php require_once'session.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Crear taller</title>
</head>

<body>

    <?php include_once 'menu.php'; ?>

    <div class="container">
        <div class="card shadow-lg p-3 mb-3 bg-white rounded mt-4" style="max-width: 900px; margin: 0 auto;">
            <div class="card-body">
                <div class="card-title pb-2 text-center">
                    <h4 class="text-secondary">Agregar taller</h4>
                    <hr class="pb-2 pt-2">
                </div>
                <form action="?c=Admin&a=guardar" method="POST">
                    <div class="form-group form-inline">
                        <label>Nombre del taller</label>
                        <input type="hidden" name="tipo" value="taller">
                        <input type="text" name="nombre" class="form-control p2 mx-sm-3" required="" autocomplete="off" style="max-width: 70%;">
                    </div>

                    <div class="form-group form-inline">
                        <label>Tipo de documento</label>
                        <select class="form-control p2 mx-sm-3" name="tipo_documento"value="" required>
                            <option selected disabled value=""> </option>
                            <option>Cédula de ciudadania</option>
                            <option>NIT</option>
                        </select>
                    </div>

                    <div class="form-group form-inline">
                        <label>Número de documento</label>
                        <input type="number" name="no_documento" class="form-control p2 mx-sm-3" required="" autocomplete="off" style="max-width: 70%;">
                    </div>

                    <div class="form-group form-inline">
                        <label>Dirección</label>
                        <input type="text" name="direccion" class="form-control p2 mx-sm-3" required="" autocomplete="off">
                    </div>

                    <div class="form-group form-inline">
                        <label>Telefono</label>
                        <input type="number" name="telefono" class="form-control p2 mx-sm-3" required="" autocomplete="off">
                    </div>

                    <div class="form-group form-inline">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control p2 mx-sm-3" required="" autocomplete="off">
                    </div>

                    <hr class="pt-4 mt-5">
                    <div class="form-row mt-4">
                        <div class="col-md-6 mb-3 pr-4">
                            <a href="talleres.php" class="btn btn-danger form-control">Cancelar</a>
                        </div>
                        <div class="col-md-6 mb-3  pr-4">
                            <input class="btn btn-info form-control" value="Guardar" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>