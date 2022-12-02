<!DOCTYPE html PUBLIC>
<html>

<head>
    <title>Carrito</title>

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

        $cookieCompraPrecio=precioTotal::precioTotalPedido($_SESSION["compra"]);

        setcookie('cookie', $cookieCompraPrecio, time() + 10); 


        if (isset ($_POST['Del'])){
            $pedidoSel = $_SESSION["compra"][$_POST['pos']];
            if ($pedidoSel ->getCantidad () == 1) {
                unset ($_SESSION["compra"][$_POST['pos']]);
                $_SESSION["compra"] = array_values($_SESSION["compra"]);
            }else{
                $pedidoSel->setCantidad ($pedidoSel->getCantidad() - 1);
            }
        }else if (isset ($_POST['Add'])){
            $pedidoSel = $_SESSION["compra"][$_POST['pos']];
            $pedidoSel->setCantidad ($pedidoSel->getCantidad() + 1);
        }
    ?>

    <header>
    <?php include ('assets/header.html'); ?>
    </header>

    <section class="container-xxl pt-4 posicionamientoFooter">
        <h1 class="mb-4" style="font-family: ArchivoBlack_Regular"><b>Cesta</b></h1>
        <div class="row mb-4">

            <div class="col-12 col-md-12">
                <table class="table-borderless">
                    <tr>
                        <th class="pb-3 fs-5 p-0" style="width: 50%"><i>Articulo</i></th>
                        <th class="pb-3 fs-5 text-center" style="width: 30%"><i>Cantidad</i></th>
                        <th class="pb-3 fs-5 text-center"><i>Precio</i></th>
                    </tr>
                    <?php
                    $pos = 0;
                    foreach($_SESSION["compra"] as $pedido){?>
                        <tr>
                            <td class="pb-3 fs-5 p-0"><?=$pedido->getProducto()->getNombreProducto()?></td>
                            <td class="fs-5 text-center">
                                
                                <form action="" method='post'>
                                    <input type="hidden" name="pos" value=<?=$pos?>>
                                    <button class="btn button1 fs-6 m-2" type="submit" name='Add'>+</button>
                                    <?=$pedido->getCantidad()?>
                                    <button class="btn button1 fs-6 m-2" type="submit" name='Del'>-</button>
                                </form>         
                            </td>
                            <td class="pb-4 fs-5 text-center"><?=$pedido->getProducto()->getPrecio()?> €</td>

                                                          
                            </td>
                        </tr>
                    <?php $pos++;
                    }?>
                    <tr>
                        <td colspan=2 class="pb-3 fs-5 pe-3" style="text-align: right"><i><b>Total </b></i>
                        <b>
                        <?php $precioTotal = precioTotal::precioTotalPedido($_SESSION["compra"]);
                        echo $precioTotal;?> €  </b>
                        </td>
                        <td class="pb-3 pt-3" style="text-align: right">
                            <form action="" method='post'>
                                <input type="hidden" name="precioFinal" value="value=<?=$precioTotal?>">
                                <button type="submit" class="btn button1 button2 mb-auto fs-5"><a class="nav-link" href="http://primerentornotoledano.com/CompraConfirmada.php">Finalizar pedido</a></button>
                            </form>
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