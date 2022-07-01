<head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>Nuevo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">     
</head>



<body>
<center>
<br>
<form action="../Controlador/Cinsertarusuario.php" method="post" >

<div class="mb-3">
        <label for="nombre_usuario" class="form-label"><i><b>Nombre</b></i></label>
        <input type="text" name="nombre_usuario" class="form-control" id="name" placeholder="Digite Su Nombre">
    </div>

    <div class="mb-3">
        <label for="apellido" class="form-label"><i><b>Apellido</b></i></label>
        <input type="text" name="apellido" class="form-control" id="name" placeholder="Digite Su Apellido">
    </div>

    <div class="mb-3">
        <label for="nombre" class="form-label"><i><b>Telefono</b></i></label>
        <input type="text" name="telefono" class="form-control" id="name" placeholder="Digite Su Telefono">
    </div>

    <div class="mb-3">
        <label for="nombre" class="form-label"><i><b>Correo</b></i></label>
        <input type="text" name="correo" class="form-control" id="name" placeholder="Digite Su Correo">
    </div>

    <div class="mb-3">
        <label for="nombre" class="form-label"><i><b>Password</b></i></label>
        <input type="password" name="password" class="form-control" id="name" placeholder="Digite Su Contraseña">
    </div>

        <tr>
            <button  class="btn btn-info">Insertar</button>
        </tr>

      </table>
    </center>
</form>
</body>
