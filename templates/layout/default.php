<?php

/**
 * Menu princial, para todas las páginas
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/webroot/css/all.css" rel="stylesheet">
    <link href="/webroot/css/cake.css" rel="stylesheet">
    
</head>

<body>
    <!-- Se ha creado el menu como predeterminado (nav) -->
    <?= $this->element('menu'); ?>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
</body>

</html>