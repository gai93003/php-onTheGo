<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>
  <?php

    $firstName = $_GET['firstname'];
    $lastName = $_GET['lastname'];

    echo 'Welcome to our website, ' . 
      htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' . 
      htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
  ?>
</body>
</html>
