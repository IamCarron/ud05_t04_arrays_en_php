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
    // Array indexado
    $amigos=array("Antón","Rosalía","Xoán")
   echo "O segundo coche de Xoan é " . $cochesAmgios['Xoán'][1] ."<br/>";
    //Aarry asociativo
    $dnisAmigos=array("Antón"=>"12345678X","Rosalía"=>"11112222X","Xoan"=>"99997777X");
    echo "O DNI de Rosalía é: " . $dnisAmigos['Rosalía']."<br/>";
    //Array de dúas dimensións:
    $cochesAmgios = array
    (
    "Antón"=>array
    )
    (
    "Fiat 500",
    "Audi A3",
    "Peugot 208"
    ),
    "Rosalía"=>array
    (
    "Audi TT"    
    ),
    "Xoan"=>array
    (
    "Jaguar XF",
    "BMW 520d",
    "Seat Ibiza"    
    )
    );

    echo "O segundo coche de Xoan é " . $cochesAmgios['Xoán'][1] ."<br/>";

    ?>
</body>
</html>