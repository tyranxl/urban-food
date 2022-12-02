<!DOCTYPE html PUBLIC>
<html>

<head>
    <title>Inicio Sesion</title>

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

    <div class="container-xxl pt-4 posicionamientoFooter">
		<section class="registro mb-5">
            <form>
                <h1 class="fs-2"> ¡Inicie Sesión! </h1>
                <input class="controls fs-6" type="email" name="correo" id="correo" placeholder="Ingrese su Correo" required>
                <input class="controls fs-6" type="password" name="contraseña" id="contraseña" placeholder="Ingrese su Contraseña" required>
                <label for="volver"> <a href="index.php"> </label>
                <input class="submit" type="submit" name="volver" value="Iniciar Sesion">
            </form>
		</section>
	</div>


    <footer>
        <?php include ('assets/footer.html'); ?>
    </footer>


</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>