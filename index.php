<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    $nama = "BELUM MAKAN";
    $MAKAN = false;
    if ($MAKAN) {
        $nama = "SUDAH MAKAN";
    }else if(!$MAKAN){
        $nama = "BELUM MAKAN";
    }else{
        null;
    }
?>
<h1>

    kamu <?php echo $nama; ?>

</h1>
</body>
</html>