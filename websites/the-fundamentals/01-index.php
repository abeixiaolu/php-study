<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <h1>
    <?php echo "Hello World PHP!" ?>
  </h1>
  <p>
    <?php echo "Hello Laracasts.com" ?>
  </p>
  <p>双引号和单引号的区别：双引号会解析变量，单引号不会解析变量</p>
  <p>连接字符串可以使用点“.”</p>
  <h2>
    <?php
    $name = "John";
    echo "Hello $name";
    echo "<br>";
    echo 'Hello $name';
    echo "<br>";
    echo "Hello" . " " . $name;
    ?>
  </h2>
</body>

</html>