<html lang="es">

    <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <title>Cáculo la hipotenusa</title>


    </head>


    <body>

                <?php

                if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {

                    $radio = $_POST['radio'];
                    $area = null;

                    if(!empty($radio)){

                        if(is_numeric($radio)){

                            $hipotenusa = 2*sqrt(2)*(pow($radio,2));
                            echo "<h2 align='center'>El area es de: " . $hipotenusa . "</h2>";
                            echo "<a href='index.html'> <--Regresar </a>";
                        

                        }else{

                        echo "El valor del Radio debe ser númerico";
                        echo "<a href='index.html'> <--Regresar </a>";


                    }

                    }else{

                        echo "El valor del Radio no debe estar vacío, 
                        por favor añada un valor";
                        echo "<a href='index.html'> <--Regresar </a>";

                    }

                }else{

                    echo "Debe pulsar el botón de calcular";
                    echo "<a href='index.html'> <--Regresar </a>";

                }

                ?>


    </body>

</html>
