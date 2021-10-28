<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php    
        $n1= array($_POST["n1"], $_POST["n2"],$_POST["n3"], $_POST["n4"], $_POST["n5"],
        $_POST["n6"], $_POST["n7"]);
        
        function DescobrirOMaiorValorDoArray($n1){
        $maior = max($n1);
            
            return $maior;
    
        }

    echo DescobrirOMaiorValorDoArray($n1);
    ?>


    
</body>
</html>