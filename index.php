<?php

include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/Article.php';

$users = [
    new User('mrossi','accedi', 23, 32),
    new User('paverdi','ricordalapassword', 80, 22),
    new User('andrebianchi','mettilagiacca', 88, 42),
];

$articles = [
    new Article('termodinamica','Mauro Rossi', 2343, 1999),
    new Article('biomedica','Giacomo Marini', 888, 2020),
    new Article('elettronica','Maria Bianchi', 988, 2021),
]
?>

<!DOCTYPE html>
<html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP-OOP-2</title>
     <style>
         .box {
             height: 100px;
             width: 220px;
             line-height: 1.4rem;
           }
     </style>
 </head>
 <body>
     <h1>Users:</h1>
     <?php
     foreach ($users as $user) {?>
          <div class="box">
             <span><strong>Username: </strong> <?php echo $user->username; ?></span><br>
             <span><strong>Password: </strong> <?php echo $user->password; ?></span><br>
             <span><strong>Number of actions: </strong> <?php echo $user->actions; ?></span><br>
             <span><strong>Age: </strong> <?php echo $user->age; ?></span>     
         </div>       
     <?php } ?>
     <h1>Articles:</h1>
     <?php
     foreach ($articles as $article) {?>
          <div class="box">
             <span><strong>Categoria: </strong> <?php echo $article->category; ?></span><br>
             <span><strong>Autore: </strong> <?php echo $article->author; ?></span><br>
             <span><strong>Lunghezza: </strong> <?php echo $article->lenght; ?> caratteri</span><br>
             <span><strong>Anno di pubblicazione: </strong> <?php echo $article->year; ?></span>     
         </div>       
     <?php } ?>
 </body>
</html>