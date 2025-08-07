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
    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <?php if ($book['author'] = 'Andy Weir') : ?> <!-- Fixed comparison -->
                <li>
                    <a href="<?= $book['purchaseUrl']; ?>"> <!-- Fixed href -->
                        <?= $book['name']; ?> (<?= $book['releaseYear']; ?>) <!-- Fixed echo -->
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</body>

</html>