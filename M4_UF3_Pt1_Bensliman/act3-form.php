<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include 'cap.php' ;?>

<?php
$path = "/php/act3.php";
?>

<div class='missatge'>
<h2>Aquest fitxer és: <?php echo basename ($path); ?></h2>
</div>

<div class="formularis">

<div>
<form action="act3-respostaform.php" method="post">
Nom: <input type="text" name="nom">    

<label for="numero">EDAT:</label>
<input type="number" id="numero" name="numero">

<input type="submit">
</form>
</div>




</div>







<?php include 'peu.php';?>


</body>
</html>