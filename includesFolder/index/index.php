<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- laad hier via php je header in (vanuit je includes map) -->
  <?php require '../includes/header.php' ?>


  <!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  
<?php
if ($content == 'r6'){
    require '../pages/r6.php';
    }  if  ($content == 'mc'){
    require '../pages/mc.php';
    }else{
        echo "Some other page";
    }
?>

  <!-- laad hier via php je footer in (vanuit je includes map)-->
  <?php require '../includes/footer.php' ?>

</body>

</html>