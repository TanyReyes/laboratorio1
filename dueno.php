<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registro Cliente</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ADDDFA;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="principal.php">
                <img src="img/logo.png" alt="" width="30" height="30" class="d-inline-block align-text-top ">
                Veterinaria RM
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="principal.php">Inicio</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="mascota.php">Mascota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active rounded shadow" href="dueno.php"  style="background-color: #CDEBFC;">Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="medicamentos.php">Medicamentos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Salir</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container w-50 mt-5 rounded shadow" style="background-color: #EFF5F8;">
        <h5 class="fw-bold text-align-top text-center pt-2">REGISTRO CLIENTE</h5>
        <div class="text-center mb-3">
            <img src="img/cliente.png" alt="" width="100" height="100">
        </div>




        <form action="resultadoCliente.php" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="nombre" class="form-label fw-bold">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="col-md-6">
                <label for="apellido" class="form-label fw-bold">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="col-md-6">
                <label for="tipo" class="form-label fw-bold">Tipo documento:</label>
                <select id="tipo" class="form-select" name="tipo"  required>
                    <option value="" selected>Selecione:</option>
                    <option value="DUI">DUI</option>
                    <option value="Pasaporte">Pasaporte </option>
                    <option value="No posee">No posee</option>
                </select >
            </div>
            <div class="col-md-6">
                <label for="docu" class="form-label fw-bold">Documento:</label>
                <input type="text" class="form-control" id="docu" name="docu" required>
            </div>
            <div class="col-12">
                <label for="direccion" class="form-label fw-bold">Direccion:</label>
                <input type="text" class="form-control" id="direccion" name="direccion" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label fw-bold">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-md-3">
                <label for="edad" class="form-label fw-bold">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
            </div>

            <div class="col-md-3">
                <label for="sexo" class="form-label fw-bold">Sexo:</label>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Masculino" checked>
                    <label class="form-check-label" for="sexo" required> 
                        Masculino
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Femenino">
                    <label class="form-check-label" for="sexo" required>
                        Femenino
                    </label>
                </div>
            </div>

            <div class="col-md-6">
                <label for="tel" class="form-label fw-bold">Teléfono:</label>
                <input type="text" class="form-control" id="tel" name="tel" required>
            </div>
            <div class="col-md-6">
                <label for="coment" class="form-label fw-bold">Comentario:</label>
                <input type="text" class="form-control" id="coment" name="coment" required>
            </div>
            <div class="col-12 py-2 text-end">
                <button type="submit" class="btn btn-success fw-bold">REGISTRAR</button>
            </div>
        </form>





    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>