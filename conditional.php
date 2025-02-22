<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditional</title>
</head>
<body>
    <?php
    
    $nama = "Dimas";
    $makan = true; 

    if($makan){
        $kondisi ="Dimas sudah makan";
    }else{
        $kondisi ="Dimas belum makan";
    }
    ?>

    <h1>
        apakah dimas sudah makan? <?= $kondisi ?>
    </h1>
</body>
</html>