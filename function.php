/**
 * Menyaring array buku berdasarkan penulis tertentu.
 *
 * @param array $books Array buku yang akan disaring.
 * @param string $author Penulis yang akan disaring.
 * @return array Array buku yang disaring berdasarkan penulis yang ditentukan.
 *
 * Contoh penggunaan:
 * $filteredBooks = filterByAuthor($books, "Andy Weir");
 *
 * @link https://www.php.net/manual/en/language.types.array.php Dokumentasi tentang array di PHP
 * @link https://www.php.net/manual/en/control-structures.foreach.php Dokumentasi tentang loop foreach di PHP
 */
<!-- function filterByAuthor($books, $author) {
    $filteredBooks = [];
    foreach($books as $book) {
        if($book['author'] === $author) {    
            $filteredBooks[] = $book;
        }
    }
    return $filteredBooks;
} -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $books = [
        [
            'name' => 'The Adventures of Huckleberry Finn',
            'author' => 'Mark Twain',
            'releaseYear' => 1884,
            'purchaseUrl' => 'https://www.amazon.com/The-Adventures-Huckleberry-Finn-Twain/dp/1985234876'
        ],
        [
            'name' => 'The Catcher in the Rye',
            'author' => 'J.D. Salinger',
            'releaseYear' => 1951,
            'purchaseUrl' => 'https://www.amazon.com/The-Catcher-Rye-J-D-Salinger/dp/0316769487'
        ],
        [
            'name' => 'The Great Gatsby',
            'author' => 'F. Scott Fitzgerald',
            'releaseYear' => 1925,
            'purchaseUrl' => 'https://www.amazon.com/The-Great-Gatsby-F-Scott-Fitzgerald/dp/0743273567'
        ],
        [
            'name' => 'The Martian',
            'author' => 'Andy Weir',
            'releaseYear' => 2011,
            'purchaseUrl' => 'https://www.amazon.com/The-Martian-Andy-Weir/dp/0553418025'
        ],
        [
            'name' => 'Hail Marry',
            'author' => 'Andy Weir',
            'releaseYear' => 2017,
            'purchaseUrl' => 'https://www.amazon.com/Hail-Mary-Andy-Weir/dp/0593135202'
        ]
    ];
    function filterByAuthor($books, $author){
        $filteredBooks = [];
        foreach($books as $book){
            if($book['author'] === "Andy Weir"){    
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    };
    ?>
    <h1>Books by Andy Weir</h1>
    <ul>
    <?php foreach(filterByAuthor($books, "Andy Weir") as $book): ?>
        <?php if($book['author'] == true): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'] ?> by <?= $book['author'] ?>
                </a>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
    </ul>
</body>
</html>