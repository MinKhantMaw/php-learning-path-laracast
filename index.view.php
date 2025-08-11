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