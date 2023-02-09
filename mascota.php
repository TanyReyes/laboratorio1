<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registro Mascota</title>
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
                        <a class="nav-link active rounded shadow" href="mascota.php" style="background-color: #CDEBFC;">Mascota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="dueno.php">Cliente</a>
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
        <h5 class="fw-bold text-align-top text-center pt-2">REGISTRO MASCOTA</h5>
        <div class="text-center mb-3">
            <img src="img/perro.png" alt="" width="100" height="100">
        </div>




        <form action="resultadoMas.php" method="post" class="row g-3">
            <div class="col-md-6">
                <label for="nombreM" class="form-label fw-bold">Nombre:</label>
                <input type="text" class="form-control" id="nombreM" name="nombreM" required>
            </div>
            <div class="col-md-6">
                <label for="tipo" class="form-label fw-bold">Tipo mascota</label>
                <select id="tipo" class="form-select" name="tipo"  required>
                    <option value="" selected>Selecione:</option>
                    <option value="Perro">Perro</option>
                    <option value="Gato">Gato </option>
                    <option value="Hámster">Hámster</option>
                    <option value="Pájaro">Pájaro</option>
                    <option value="Pez">Pez</option>
                </select >
            </div>
            <div class="col-md-6">
                <label for="raza" class="form-label fw-bold">Raza:</label>
                <input type="text" class="form-control" id="raza" name="raza" required>
            </div>
            <div class="col-md-3">
                <label for="peso" class="form-label fw-bold">Peso:</label>
                <input type="number" class="form-control" id="peso" name="peso" required>
            </div>
            <div class="col-md-3">
                <label for="alura" class="form-label fw-bold">Altura:</label>
                <input type="number" class="form-control" id="altura" name="altura" required>
            </div>
            <div class="col-md-3">
                <label for="nacimiento" class="form-label fw-bold">Nacimiento:</label>
                <input type="date" class="form-control" id="nacimiento" name="nacimiento" required>
            </div>
            <div class="col-md-3">
                <label for="edad" class="form-label fw-bold">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
            </div>

            <div class="col-md-3">
                <label for="sexo" class="form-label fw-bold">Sexo:</label>
                <div class="form-check ">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Macho" checked>
                    <label class="form-check-label" for="sexo" required> 
                        Macho
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="sexo" id="sexo" value="Hembra">
                    <label class="form-check-label" for="sexo" required>
                        Hembra
                    </label>
                </div>
            </div>
            <div class="col-md-3">
                <label for="esterelizado" class="form-label fw-bold">Esterelizado:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estere" id="estere" value="Si" checked>
                    <label class="form-check-label" for="estere">
                        Si
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="estere" id="estere" value="No">
                    <label class="form-check-label" for="estere">
                        No
                    </label>
                </div>
            </div>

            <div class="col-md-6">
                <label for="colo" class="form-label fw-bold">Color:</label>
                <input type="text" class="form-control" id="color" name="color" required>
            </div>
            <div class="col-md-6">
                <label for="contact" class="form-label fw-bold">Contacto de emergencia:</label>
                <input type="text" class="form-control" id="contact" name="contact" required>
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