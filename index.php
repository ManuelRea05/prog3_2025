<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <form action="index.php" method="post">

    Ingresa tu nombre: <input type="text" name="nombre" id="">
    <br>
    <input type="submit" value="Enviar">



    </form>

    <?php
       

    if(isset($_POST["nombre"])){

        echo "</br>  Hola " .$_POST["nombre"] ;

    }
       
    echo "HOLA MUNDO";

    $v=0;

    /*
    for ($i=0; $i<20; $i++){
        echo $v++ . "</br>";


    }
    
    */
    
    ?>

    

</body>
</html>