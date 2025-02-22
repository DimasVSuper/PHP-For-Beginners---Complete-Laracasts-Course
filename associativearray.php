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
        [
            'title' => 'The Adventures of Huckleberry Finn',
            'author' => 'Mark Twain',
            'url' => 'https://www.amazon.com/The-Adventures-Huckleberry-Finn-Twain/dp/1985234876'
        ],
        [
            'title' => 'The Catcher in the Rye',
            'author' => 'J.D. Salinger',
            'url' => 'https://www.amazon.com/The-Catcher-Rye-J-D-Salinger/dp/0316769487'
        ],
        [
            'title' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'url' => 'https://www.amazon.com/The-Great-Gatsby-F-Scott-Fitzgerald/dp/0743273567'
        ]
    ];
    ?>

    <ul>
    <?php foreach($books as $book): ?>
        <li>
            <strong><?= $book['title'] ?></strong> by <?= $book['author'] ?>
            <a href="<?= $book['url'] ?>">Buy here</a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>