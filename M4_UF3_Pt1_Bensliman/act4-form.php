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
$path = "/php/act4.php";
?>

<div class='missatge'>
<h2>Aquest fitxer és: <?php echo basename ($path); ?></h2>
</div>






<div class="formularis">


<form action="act4-respostaform.php" method="post">
<label for="name">NOM:</label>
<input type="text" id="nom" name="nom" >


<label for="quantity">EDAT:</label>
<input type="number" id="numero" name="numero">

<input type="submit">

</form>




</div>





<?php include 'peu.php';?>


</body>
</html>