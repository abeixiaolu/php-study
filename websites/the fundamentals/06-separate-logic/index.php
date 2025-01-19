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
// Anonymous function
$filterFunc = function ($items, $fn) {
  $filteredItems = [];
  foreach ($items as $item) {
    if ($fn($item)) {
      $filteredItems[] = $item;
    }
  }
  return $filteredItems;
};
$filteredBooks = array_filter($books, function ($book) {
  return $book['author'] === 'Andy Weir';
});

require "index.view.php";
