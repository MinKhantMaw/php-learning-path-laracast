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
    function filter($items, $key, $value)
    {
        $filteredItems = [];
        foreach ($items as $item) {
            if ($item[$key] === $value) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    }

    // Example usage:
    $filteredBooks = array_filter($books, function ($book) {
        return $book['releaseYear'] >= 1905 && $book['releaseYear'];
    });

    require "index.view.php"
    ?>