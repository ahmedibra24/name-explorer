<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Name Explorer</title>
    <link rel="stylesheet" href="./style/style.css" />
  </head>
  <body class="dark-body">
    <header class="dark-header fade-in">
      <h1><a href="index.php">Name Explorer</a></h1>
      <p>Explore and find names</p>
    <nav class="letters fade-in">
        <?php foreach($alphabet as $character): ;?>
        <a href="index.php?<?php echo http_build_query(['char'=> $character]); ?>"><?php echo e($character) ?></a>
        <?php endforeach?>
      
     
     
    </nav>
      <?php echo $contents; ?>
    </header>
    <footer class="dark-footer fade-in">
      <p>© 2025 Name Explorer. All rights reserved.</p>
      <p>Created by Ahmed Fawzy</p>
      <img src="./images/code-with-fawzy-high-resolution-logo-transparent.png" alt="logo">
    </footer>
  </body>
</html>

