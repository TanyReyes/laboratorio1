

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Resultado Cliente</title>
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
                        <a class="nav-link active " href="mascota.php">Mascota</a>
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

    <?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $tipo = $_POST['tipo'];
    $documento = $_POST['docu'];
    $direccion = $_POST['direccion'];
    $email = $_POST['email'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $telefono = $_POST['tel'];
    $comentario = $_POST['coment'];
    ?>
 

    <div class="container w-100 mt-5 rounded shadow" style="background-color: #EFF5F8;">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Tipo documento</th>
                    <th scope="col"># Documento </th>
                    <th scope="col">Dirección </th>
                    <th scope="col">Email </th>
                    <th scope="col">Edad </th>
                    <th scope="col">Sexo </th>
                    <th scope="col">Telefono </th>
                    <th scope="col">Comentario </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td><?php  echo $nombre ?></td>
                    <td><?php  echo $apellido ?></td>
                    <td><?php  echo $tipo ?></td>
                    <td><?php  echo $documento ?></td>
                    <td><?php  echo $direccion ?></td>
                    <td><?php  echo $email ?></td>
                    <td><?php  echo $edad ?></td>
                    <td><?php  echo $sexo ?></td>
                    <td><?php  echo $telefono ?></td>
                    <td><?php  echo $comentario ?></td>
                </tr>
            </tbody>
        </table>

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