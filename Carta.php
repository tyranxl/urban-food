<!DOCTYPE html PUBLIC>
<html>

<head>
    <title>Carta</title>

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
            include ('assets/php/listaProductos.php');
            include ('assets/php/pedido.php');

            /* Control temporal de la sesión
            ini_set('session.gc_maxlifetime', 10); */
            
            session_start();

            //TAPAS
            if(isset($_SESSION['compra'])){
                if(isset($_POST['productoTapas'])){
                    $tapasSel=new pedido($listaTapas[$_POST['productoTapas']]);
                    array_push($_SESSION['compra'],$tapasSel);
                }

                //ENSALADAS
                if(isset($_POST['productoEnsalada'])){
                    $ensaladasSel=new pedido($listaEnsaladas[$_POST['productoEnsalada']]);
                    array_push($_SESSION['compra'],$ensaladasSel);
                }
            
                //HUEVOS
                if(isset($_POST['productoHuevos'])){
                    $huevosSel=new pedido($listaHuevos[$_POST['productoHuevos']]);
                    array_push($_SESSION['compra'],$huevosSel);
                }

                //PLATOS CLASICOS
                if(isset($_POST['productoClasicos'])){
                    $clasicosSel=new pedido($listaClasicos[$_POST['productoClasicos']]);
                    array_push($_SESSION['compra'],$clasicosSel);
                }

                //BEBIDAS
                if(isset($_POST['productoBebidas'])){
                    $bebidasSel=new pedido($listaBebidas[$_POST['productoBebidas']]);
                    array_push($_SESSION['compra'],$bebidasSel);
                }

                //CERVEZAS
                if(isset($_POST['productoCerveza'])){
                    $cervezasSel=new pedido($listaCervezas[$_POST['productoCerveza']]);
                    array_push($_SESSION['compra'],$cervezasSel);
                }

            }else{
                    $_SESSION['compra']=array();
            }

            //$_SESSION['compra']=[];
        ?>
    <header>
    <?php include ('assets/header.html'); ?>
    </header>
    

    <section class="container-xxl pt-4">
        <h1 style="font-family: ArchivoBlack_Regular"><b>Carta</b></h1>
        <div class="row mb-4">

            <div class="col-12 col-md-6">
                <h3 class="mb-4 pt-3" style="font-family: ArchivoBlack_Regular"><b>Nuestras Tapas de Siempre</b></h3>
                <table class="table-borderless">
                <?php
                    foreach($listaTapas as $key => $producto){?>
                    <tr>
                        <td class="pb-3 fs-5 p-0" style="width: 45%"><?=$producto->getNombreProducto() ?></td>
                        <td class="pb-3 fs-5 text-center" style="width: 27%"><?=$producto->getPrecio() ?> €</td>
                        <td class="pb-3 pt-3" style="width: 25%; text-align: right">
                            <form action="" method='post'>
                                <input type="hidden" name="productoTapas" value=<?=$key;?>>
                                <button type="submit" class="btn button1 mb-auto fs-5">Añadir</button>
                            </form>
                        </td>
                    </tr>
                <?php
                    }?>
                </table>
            </div>

            <div class="col-12 col-md-6">
                <h3 class="mb-4 pt-3" style="font-family: ArchivoBlack_Regular"><b>Ensaladas</b></h3>
                <table class="table-borderless">
                <?php
                    foreach($listaEnsaladas as $key => $producto){?>
                    <tr>
                        <td class="pb-3 fs-5 p-0" style="width: 45%"><?=$producto->getNombreProducto() ?></td>
                        <td class="pb-3 fs-5 text-center" style="width: 27%"><?=$producto->getPrecio() ?> €</td>
                        <td class="pb-3 pt-3" style="width: 25%; text-align: right">
                            <form action="" method='post'>
                                <input type="hidden" name="productoEnsalada" value=<?=$key;?>>
                                <button type="submit" class="btn button1 mb-auto fs-5">Añadir</button>
                            </form>
                        </td>
                    </tr>
                <?php
                    }?>
                </table>
            </div>
        </div>
        <p class="fs-6" style="text-align: center">* Precios con I.V.A. incluido *</p>
    </section>
    
    <div class="contenedorimagen5Carta">

    </div>
    <div class="contenedorimagen5CartaOculto">

    </div>
    
    <section class="container-xxl pt-4">
        <div class="row mb-5">

        <div class="col-12 col-md-6">
                <h3 class="mb-4 pt-3" style="font-family: ArchivoBlack_Regular"><b>Huevos</b></h3>
                <table class="table-borderless">
                <?php
                    foreach($listaHuevos as $key => $producto){?>
                    <tr>
                        <td class="pb-3 fs-5 p-0" style="width: 45%"><?=$producto->getNombreProducto() ?></td>
                        <td class="pb-3 fs-5 text-center" style="width: 27%"><?=$producto->getPrecio() ?> €</td>
                        <td class="pb-3 pt-3" style="width: 25%; text-align: right">
                            <form action="" method='post'>
                                <input type="hidden" name="productoHuevos" value=<?=$key;?>>
                                <button type="submit" class="btn button1 mb-auto fs-5">Añadir</button>
                            </form>
                        </td>
                    </tr>
                <?php
                    }?>
                </table>
            </div>

            <div class="col-12 col-md-6">
                <h3 class="mb-4 pt-3" style="font-family: ArchivoBlack_Regular"><b>Platos clásicos</b></h3>
                <table class="table-borderless">
                <?php
                    foreach($listaClasicos as $key => $producto){?>
                    <tr>
                        <td class="pb-3 fs-5 p-0" style="width: 45%"><?=$producto->getNombreProducto() ?></td>
                        <td class="pb-3 fs-5 text-center" style="width: 27%"><?=$producto->getPrecio() ?> €</td>
                        <td class="pb-3 pt-3" style="width: 25%; text-align: right">
                            <form action="" method='post'>
                                <input type="hidden" name="productoClasicos" value=<?=$key;?>>
                                <button type="submit" class="btn button1 mb-auto fs-5">Añadir</button>
                            </form>
                        </td>
                    </tr>
                <?php
                    }?>
                </table>
            </div>
        </div>
        <p class="fs-6" style="text-align: center">* Precios con I.V.A. incluido *</p>
    </section>
    
    <div class="contenedorimagen6Carta">

    </div>
    <div class="contenedorimagen6CartaOculto">

    </div>

    
    
    <section class="container-xxl pt-4">
        <div class="row mb-5">

        <div class="col-12 col-md-6">
                <h3 class="mb-4 pt-3" style="font-family: ArchivoBlack_Regular"><b>Bebidas</b></h3>
                <table class="table-borderless">
                <?php
                    foreach($listaBebidas as $key => $producto){?>
                    <tr>
                        <td class="pb-3 fs-5 p-0" style="width: 45%"><?=$producto->getNombreProducto() ?></td>
                        <td class="pb-3 fs-5 text-center" style="width: 27%"><?=$producto->getPrecio() ?> €</td>
                        <td class="pb-3 pt-3" style="width: 25%; text-align: right">
                            <form action="" method='post'>
                                <input type="hidden" name="productoBebidas" value=<?=$key;?>>
                                <button type="submit" class="btn button1 mb-auto fs-5">Añadir</button>
                            </form>
                        </td>
                    </tr>
                <?php
                    }?>
                </table>
            </div>

            <div class="col-12 col-md-6">
                <h3 class="mb-4 pt-3" style="font-family: ArchivoBlack_Regular"><b>Cervezas</b></h3>
                <table class="table-borderless">
                <?php
                    foreach($listaCervezas as $key => $producto){?>
                    <tr>
                        <td class="pb-3 fs-5 p-0" style="width: 45%"><?=$producto->getNombreProducto() ?></td>
                        <td class="pb-3 fs-5 text-center" style="width: 27%"><?=$producto->getPrecio() ?> €</td>
                        <td class="pb-3 pt-3" style="width: 25%; text-align: right">
                            <form action="" method='post'>
                                <input type="hidden" name="productoCerveza" value=<?=$key;?>>
                                <button type="submit" class="btn button1 mb-auto fs-5">Añadir</button>
                            </form>
                        </td>
                    </tr>
                <?php
                    }?>
                </table>
            </div>
        </div>
        <p class="fs-6" style="text-align: center">* Precios con I.V.A. incluido *</p>
    </section>

    <footer>
        <?php include ('assets/footer.html'); ?>
    </footer>


</body>

<script src="assets/js/bootstrap.bundle.min.js"></script>

</html>