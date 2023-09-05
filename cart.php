<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/cart.css">
    <title>Cart</title>
</head>
<body>
    <header class="header margen-interno">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <div class="menu">
            <div class="logo">
                <img src="./imagenes/logoDeTodo.png">
            </div>
            <nav class="nav">
                <a href="./login.html"><i class="fas fa-home"></i> Login</a>
                <a href="./vision.html"><i class="fas fa-grip"></i> Vision / Mision</a>
                <a href="./contactanos.html"><i class="fas fa-road-circle-check"></i>Conocenos</a>
            </nav>
            <div class="social">
            <div><a href="#"> <i class="fa-brands fa-facebook"aria-hidden="true">Facebook</i></a></div>
            <div><a href="#"> <i class="fa-brands fa-twitter"aria-hidden="true">Twiter</i></a></div>
            </div>
        </div>
    </header>
    <section class="section margen-interno">
        <div class="CartTittle">
            <h1>Mi Carrito</h1>
            <p>A continuación se muestran los productos que usted ha seleccionado en la lista de productos.</p>
        </div>
        <div class="CartContainer">
            <form action="">
                    <table>
                        <thead>
                            <tr>
                                <th>Producto</th>
                                <th>Detalle</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include './productos.php';
                            $json = json_decode($_POST['inputCar']);
                            //var_dump (count($json));
                            $str = strrpos($_POST['inputCar'], '10');
                            echo ('<br>');
                            //var_dump($productData[0]);
                            for($i = 0; $i <= count($productData)-1; $i++){
                                
                                //$productData => ["id" => $id, "nombre" => $nombre, "descripcion" => $descripcion, "precio" => $precio, 'image' => $image];
                                $priceFormat = number_format($productData[$i]['precio'], 2, '.', '');
                                $tmp_find = strrpos($_POST['inputCar'], '"id":'.$productData[$i]['id']);
                                $tmp_count = 2;
                                if($tmp_find != false){
                                
                                $cantidad = 0;
                                for($j = 0; $j < count($json); $j++){  
                                    if($json[$j]->{"id"} == $productData[$i]['id']) $cantidad = $json[$j]->{"cantidad"};
                                }
                                echo('</br>');
                                //var_dump($json[$i-1]->{"cantidad"});
                                    echo(' 
                                    <tr filaProducto="'.$productData[$i]['id'].'">
                                        <td>
                                            <img src="./imagenes/'.$productData[$i]['image'].'">
                                        </td>
                                        <td>
                                            <h1>'.$productData[$i]['nombre'].'</h1>
                                            <!--<p>'.$productData[$i]['descripcion'].'</p>--> 
                                        </td>
                                        <td>
                                            <input prodIdVal="'.$productData[$i]['id'].'" value="'.$priceFormat.'" disabled=true></input>
                                        </td>
                                        <td>
                                            <input class="inputCantidad" prodIdCant="'.$productData[$i]['id'].'" value="'.$cantidad.'"></input>
                                        </td>
                                        <td>
                                            <input class="inputSubTotal" prodIdSub="'.$productData[$i]['id'].'" value="'.$cantidad * $priceFormat.'" disabled=true></input>
                                        </td>
                                        <td>
                                            <button type="button" onclick="eliminarProducto('.$productData[$i]['id'].')">Eliminar</button>
                                        </td>
                                    </tr>
                                    ');
                                }
                            }
                            ?>
                            
                        </tbody> 
                    </table>
                    
                <div>
                   <button>Confirmar compra</button> 
                </div>
            </form>
        </div>
    </section>
    <script src="./js/cartElements.js"></script>
</body>
</html>

