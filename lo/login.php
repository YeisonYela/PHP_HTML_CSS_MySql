<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="../css/estilos1.css">
  <head>
    <meta charset="utf-8">

  </head>
  <body>
    <article class="login">
    <h1>LOGUEAR USUARIO</h1>
    <form action="loginusuario.php" method="POST">
    <input type="text" name="correo" placeholder="Digite Su Correo" required></input>
    <br>
    <input type="password" name="password" placeholder="Digite Su Contraseña" required></input>
    <br>
        <input type="submit" name="enviar" value="Loguear"class="button"></input>
        </form>
      </form>

      <form action="registro.php" method="POST" >
      <input  type="submit" name="registrar" value="registrar"class="button"  ></imput>
        </form>
      </article>
  </body>
</html>
