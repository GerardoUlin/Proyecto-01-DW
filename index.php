<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Flebox practica (2)</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=REM:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" >

</head>
<body>
    <div class="padre">
        <header class="header margen-interno">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
            <div class="menu">
                <div class="logo">
                    <img src="./imagenes/logoDeTodo.png">
                </div>
                <nav class="nav">
                    <a href="./"><i class="fas fa-home"></i> Inicio</a>
                    <a href="./vision.html"><i class="fas fa-grip"></i> Vision / Mision</a>
                    <a href="./contactanos.html"><i class="fas fa-road-circle-check"></i>Conocenos</a>
                </nav>
                <div class="social">
                    <div><a href="#"> <i class="fa-brands fa-facebook"aria-hidden="true">Facebook</i></a></div>
                    <div><a href="#"> <i class="fa-brands fa-twitter"aria-hidden="true">Twiter</i></a></div>
                    <form name="Cart" action="./cart.php" method="POST">
                    <input hidden="true" type="text" name="inputCar" id="inputCar" value=""></input>
                    <button type="submit" id="tmpBTN"><i class="fa fa-shopping-cart" aria-hidden="true"></i></button>
                </form>
                </div>
            </div>
            <div class="slogan">
                <img src="./imagenes/Slogan.png" alt="">
            </div>
            <div class="texto-principal">
                <p><strong>Somos una empresa líder en comercio electrónico,
                    especializada en ofrecer una amplia gama de productos de alta calidad en línea.
                    Desde alimentos frescos hasta tecnología de vanguardia, cuidado personal,
                    artículos de jardinería y electrodomésticos, nos enorgullece proporcionar a
                    nuestros clientes una experiencia de compra diversa y conveniente en
                    todas las categorías.</strong></p>
            </div>


        </header>
        <section class="section margen-interno">
            <div class="articulo">

                <?php
                include './productos.php';
                foreach($productData as ["id" => $id, "nombre" => $nombre, "descripcion" => $descripcion, "precio" => $precio, 'image' => $image]){
                    $priceFormat = number_format($precio, 2, '.', '');
                    echo '<article class="article" style="text-align: center;">
                            <img src=" ./imagenes/'.$image.'">
                            <div class="black-box">
                                <h3><strong>Q'.$priceFormat.'</strong></h3>
                            </div>
                            <h2><strong>'.$nombre.'</strong></h2>
                            <p><strong>'.$descripcion.'</strong></p>
                            <button onClick="agregarProducto('.$id.')">Agregar a Carrito</button>
                        </article>';
                }
                
                ?>

                <nav class="navegacion">
                    <a href="#">Inicio</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">Final</a>
                </nav>
            </div>
            <aside class="aside">
                <div class="publicidad">
                    <div style="text-align: center;">
                        <h4>Coca</h4>
                    </div>
                    <img src="imagenes/7IBm.gif" alt="">
                </div>
                <div class="publicidad">
                    <div style="text-align: center;">
                        <h4>Flow</h4>
                    </div>
                    <img src="imagenes/6os.gif" alt="">
                </div>
                <div class="publicidad">
                    <div style="text-align: center;">
                        <h4>Cool</h4>
                    </div>
                    <img src="imagenes/8Dsr.gif" alt="">
                </div>
                <div class="publicidad">
                    <div style="text-align: center;">
                        <h4>Pepsi</h4>
                    </div>
                    <img src="imagenes/B1WV.gif" alt="">
                </div>
                <div class="publicidad">
                    <div style="text-align: center;">
                        <h4>Phone</h4>
                    </div>
                    <img src="imagenes/L9ob.gif" alt="">
                </div>

            </aside>
        </section>
        <footer class="footer">
            <nav class="pie">
                <a href="#">Desarrollo Web</a>
            </nav>
        </footer>
    </div>
    <script src="./js/cart.js"></script>
</body>
</html>