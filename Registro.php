<!DOCTYPE html PUBLIC>
<html>

<head>
    <title>¡Registrate!</title>

    <meta charset="UTF-8">
    <meta name="description" content="Descripció web">
    <meta name="keywords" content="Paraules clau">
    <meta name="author" content="Autor">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/navbars/">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/full_estil.css" rel="stylesheet" type="text/css" media="screen">

    <meta http-equiv="refresh" content="2000">

</head>

<body style="background-color: #EFEDEB; font-family: Public_Sans">

    <header>
    <?php include ('assets/header.html'); ?>
    </header>

    <div class="container-xxl pt-4">
		<section class="registro mb-5">
            <form>
                <h1 class="fs-2"> ¡Registrate! </h1>
                <input class="controls fs-6" type="text" name="nombres" id="nombres" placeholder="Ingrese su Nombre" required>
                <input class="controls fs-6" type="text" name="apellidos" id="apellidos" placeholder="Ingrese su Apellido" required>
                <input class="controls fs-6" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
                <input class="controls fs-6" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su Contraseña" required>
                <input type="checkbox" id="check1" value="checkbox" required> He leído y acepto las condiciones detalladas en los Avisos Legales,  en la Política de cookies y las Condiciones de uso y privacidad. </label>
                <label for="volver"> <a href="index.php"> </label>
                <input class="submit" type="submit" name="volver" value="Registrar">
                <p class="fs-5"> <a class="nav-link" href="Inicio_Sesion.php">¿Ya tiene cuenta? </a> </p>
                <p class="fs-6"> Dale a ese enlace para iniciar sesion </p>
            </form>
		</section>
	</div>


    <footer>
        <?php include ('assets/footer.html'); ?>
    </footer>


</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>