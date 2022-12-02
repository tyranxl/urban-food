<!DOCTYPE html PUBLIC>
<html>

<head>
    <title>Contacto</title>

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
    
    <section class="container-xxl pt-4">
        <div class="row">

            <div class="col-12 col-md-6 mb-4">
                <h1 style="font-family: ArchivoBlack_Regular"><b>Contacta con nosotros</b></h1>
                <h3 class="mb-4 pt-3" style="font-family: ArchivoBlack_Regular"><b>Formulario</b></h3>
                <form action="mailto:info@urbanfood.com">
                    <div class="mb-3">
                        <label for="nya" class="form-label txt_negrita fs-5">Nombres y Apellidos</label>
                        <input type="text" class="form-control" id="nya" aria-describedby="nyaHelp" required>
                        <div id="nyaHelp" class="form-text">Ejemplo: Carlos Torres Rojas</div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label txt_negrita fs-5">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                        <div id="emailHelp" class="form-text">Ejemplo: miemail@mail.com</div>
                    </div>
                    <div class="mb-3">
                        <label for="asunto" class="form-label txt_negrita fs-5">Asunto</label>
                        <input type="text" class="form-control" id="asunto" aria-describedby="asuntoHelp" required>
                        <div id="asuntoHelp" class="form-text">Ejemplo: Solicitud de Compra</div>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label txt_negrita fs-5">Mensaje</label>
                        <textarea class="form-control" id="mensaje" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="checkbox" id="check1" value="checkbox" required> He leído y acepto las condiciones detalladas en los Avisos Legales,  en la Política de cookies y las Condiciones de uso y privacidad. </label>
                    </div>
                    <button type="submit" class="btn button1 mb-2">Enviar</button>
                    <button type="reset" class="btn button1 mb-2 mx-4">Limpiar</button>
                </form>
            </div>

            <div class="my-auto col-12 col-md-6">
                <h3 class="mb-4 alineacioncontacto" style="font-family: ArchivoBlack_Regular"><b>Dirección</b></h3>
                <p class="alineacioncontacto fs-5"> Passeig Marítim, 218, 220 </p>
                <p class="alineacioncontacto fs-5"> 08860 Castelldefels <p>
                <p class="alineacioncontacto fs-5"> Barcelona <p>
                <div class="pt-5">
                    <h3 class="mb-4 alineacioncontacto" style="font-family: ArchivoBlack_Regular"><b>Contacto</b></h3>
                    <p class="alineacioncontacto fs-5"> Telf. 936 654 311 </p>
                    <p class="alineacioncontacto fs-5"> info@urbanfood.com <p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <?php include ('assets/footer.html'); ?>
    </footer>


</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>