<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Document</title>
</head>
<body>

    <?php

        $limiInf = $_POST ["n1"]; //1
        $limiSup = $_POST ["n2"]; //5

        function quadrado($limiInf, $limiSup){
            for ($i=$limiInf+1; $i < $limiSup; $i++) {
                $aoquadrado = $i*$i;
               
                // echo  pow($i, 2);
                echo $aoquadrado." | "; 
                
            }
        }
        quadrado($limiInf, $limiSup);


    ?>

    
</body>
</html>