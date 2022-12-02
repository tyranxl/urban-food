<!DOCTYPE html PUBLIC>
<html>

<head>
    <title>Compra confirmada con éxito</title>

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

    <?php
        include ('assets/php/productos.php');
        include ('assets/php/producto.php');
        include ('assets/php/pedido.php');
        include ('assets/php/listaProductos.php');
        include ('assets/php/precioTotal.php');

        session_start();

    ?>

    <header>
    <?php include ('assets/header.html'); ?>
    </header>

    <section class="container-xxl pt-4 posicionamientoFooter">
        <h1 class="mb-4" style="font-family: ArchivoBlack_Regular"><b>Compra confirmada con éxito</b></h1>
        <div class="row mb-4">

            <div class="col-12 col-md-12">
                <table class="table-borderless">
                    <tr>
                        <th class="pb-3 fs-5 p-0" style="width: 50%"><i>Articulo</i></th>
                        <th class="pb-3 fs-5 text-center" style="width: 30%"><i>Cantidad</i></th>
                        <th class="pb-3 fs-5 text-center"><i>Precio</i></th>
                        <th></th>
                    </tr>
                    <?php
                    $pos = 0;
                    foreach($_SESSION["compra"] as $pedido){?>
                        <tr>
                            <td class="pb-3 fs-5"><?=$pedido->getProducto()->getNombreProducto()?></td>
                            <td class="pb-3 fs-5 text-center"><?=$pedido->getCantidad()?></td>
                            <td class="pb-3 fs-5 text-center"><?=$pedido->getProducto()->getPrecio()?> €</td>                            
                        </tr>
                    <?php $pos++;
                    }?>
                    <tr>
                        <td colspan=3 class="fs-5 p-5" style="text-align: right"><i><b>Total &nbsp;</b></i>
                        <b>
                        <?php $precioTotal = precioTotal::precioTotalPedido($_SESSION["compra"]);
                        echo $precioTotal;?> €  </b>
                        </td>                        
                    </tr>
                </table>
            </div>

        </div>
    </section>

    <footer>
        <?php include ('assets/footer.html'); ?>
    </footer>


</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>