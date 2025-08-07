<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* h1 {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }

        ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        p {
            text-align-last: center;
        } */
    </style>
</head>

<body>
    <h1>Recommended Books</h1>
    <?php
    $books = [
        [
            'name' => "Do Android Developers Dream of Electric Sheep?",
            'author' => "Philip K. Dick", // Fixed - was a book title
            'purchaseUrl' => 'example.com/book1',
            'releaseYear' => 2024
        ],
        [
            'name' => "Project Hail Mary",
            'author' => "Andy Weir", // Fixed - "The Martian" is a book title
            'purchaseUrl' => 'example.com/book2',
            'releaseYear' => 2023
        ],
        [
            'name' => 'The Pragmatic Programmer',
            'author' => 'Andrew Hunt, David Thomas',
            'purchaseUrl' => 'example.com/book3',
            'releaseYear' => 2022
        ]
    ];
    // filer the books by author
    function filterAuthor($books, $author)
    {
        $filteredBooks = [];
        foreach ($books as $book) {
            if ($book['author'] === $author) {
                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }

    // Example usage:
    $filteredBooks = filterAuthor($books, 'Andrew Hunt, David Thomas');
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book): ?>
            <li>
                <a href="<?= htmlspecialchars($book['purchaseUrl']); ?>">
                    <?= htmlspecialchars($book['name']); ?> (<?= htmlspecialchars($book['releaseYear']); ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>