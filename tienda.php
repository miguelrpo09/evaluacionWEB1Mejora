<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Tiendita</title>
</head>

<body>
    <header>


    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col4">
                    <form class="mt-5" action="tienda.php" method="POST">
                        <h4 class="text-center">Registrar Productos</h4>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Producto1" name="prducto1">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Precio Producto1" name="vlProducto1">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="cantidad Producto1" name="cantProducto1">
                                </div>
                            </div>   
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Producto2" name="producto2">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Precio Producto2" name="vlProducto2">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="cantidad Producto2" name="cantProducto2">
                                </div>
                            </div> 
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Producto3" name="producto3">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Precio Producto3" name="vlProducto3">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="cantidad Producto3" name="cantProducto3">
                                </div>
                            </div> 
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Producto4" name="producto4">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Precio Producto4" name="vlProducto4">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="cantidad Producto4" name="cantProducto4">
                                </div>
                            </div> 
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Producto5" name="producto5">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Precio Producto5" name="vlProducto5">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="cantidad Producto5" name="cantProducto5">
                                </div>
                            </div> 
                                <button type="submit" class="btn btn-primary mt-4" name=Total>Total</button>
                    </form>
                    <br>

                    <?php if(isset($_POST["Total"])): ?> 
                        <h2 class= "text-danger">                        
                            <?php
                                $producto1=$_POST["vlProducto1"];
                                $producto2=$_POST["vlProducto2"];                               
                                $producto3=$_POST["vlProducto3"];
                                $producto4=$_POST["vlProducto4"];
                                $producto5=$_POST["vlProducto5"];
                                $total1=($producto1+$producto2+$producto3+$producto4+$producto5)*1.19;
                        
                                
                                echo("El valor a pagar es : ".$total1);
                                
                                
                            ?>  
                        </h2>
                    <?php endif ?>                   
                </div>
            </div>
        </div>
    </main>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>