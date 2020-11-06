<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>EvaluacionWEB1Mejora</title>
</head>
<body>
    <header>

    
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col4">
                    <form class="mt-5" action="index.php" method="POST">
                        <h4 class="text-center">MEDIDOR TEMPERATURA MEDIA</h4>
                            <div class="row mt-3">
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Temperatura Minima" name="tempMin">
                                </div>
                                <div class="col">
                                    <input type="number" class="form-control" placeholder="Temperatura Maxima" name="tempMax">
                                </div>
                            </div>
                                <button type="submit" class="btn btn-primary mt-4" name=calcular>Calcular</button>
                    </form>

                    <?php if(isset($_POST["calcular"])): ?> 
                        <h2 class= "text-danger">                        
                            <?php
                                $temMinima=$_POST["tempMin"];    
                                $tempMax=$_POST["tempMax"];
                                $tempMedia=($tempMax+$temMinima)/2;
                                echo("La temperatura media es: ".$tempMedia);
                            ?>  
                        </h2>
                    <?php endif ?>                   
                </div>
            </div>
        </div>
    </main>
<footer>


</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>