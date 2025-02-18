<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <?php
    $books = [
        'The Adventures of Huckleberry Finn' => 'Mark Twain',
        'The Catcher in the Rye' => 'J.D. Salinger',
        'The Great Gatsby' => 'F. Scott Fitzgerald'
    ]
    ?>

    <p>
        <?= $books["The Adventures of Huckleberry Finn"] ?>
    </p>
</body>
</html>