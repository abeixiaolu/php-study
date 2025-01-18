<!DOCTYPE html>
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
      'name' => 'Do Androids Dream of Electric Sheep?',
      'author' => 'Philip K. Dick',
      'purchaseUrl' => 'https://www.amazon.com/dp/0441172717'
    ],
    [
      'name' => 'The Langoliers',
      'author' => 'Stephen King',
      'purchaseUrl' => 'https://www.amazon.com/dp/0312850504'
    ],
    [
      'name' => 'Hail Mary',
      'author' => 'Andy Weir',
      'purchaseUrl' => 'https://www.amazon.com/dp/0312850504'
    ]
  ];
  function filterByAuthor($books, $author)
  {
    $filteredBooks = [];
    foreach ($books as $book) {
      if ($book['author'] === $author) {
        $filteredBooks[] = $book;
      }
    }
    return $filteredBooks;
  }
  ?>
  <h1>Recommended Books</h1>
  <h2>Philip K. Dick</h2>
  <ul>
    <?php foreach ($books as $book): ?>
      <?php if ($book['author'] === 'Philip K. Dick'): ?>
        <li>
          <a href="<?= $book['purchaseUrl'] ?>">
            <?= $book['name'] ?>™ by <?= $book['author'] ?>
          </a>
        </li>
      <?php endif; ?>
    <?php endforeach; ?>
  </ul>
  <h2>Stephen King</h2>
  <ul>
    <?php foreach (filterByAuthor($books, 'Stephen King') as $book): ?>
      <li>
        <a href="<?= $book['purchaseUrl'] ?>">
          <?= $book['name'] ?>™ by <?= $book['author'] ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>