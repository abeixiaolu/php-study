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
    "Do Androids Dream of Electric Sheep?",
    "The Langoliers",
    "Hail Mary"
  ];
  ?>
  <h1>Recommended Books</h1>
  <!-- <ul>
    <?php foreach ($books as $book) {
      echo "<li>{$book}™</li>";
    }
    ?>
  </ul> -->
  <ul>
    <?php foreach ($books as $book): ?>
      <li><?= $book ?>™</li>
    <?php endforeach; ?>

    <?php if ($books[0] === "Do Androids Dream of Electric Sheep?"): ?>
      <li>Do Androids Dream of Electric Sheep?</li>
    <?php endif; ?>
  </ul>
</body>

</html>