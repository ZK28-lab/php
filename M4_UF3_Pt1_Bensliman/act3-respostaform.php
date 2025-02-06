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



Hola <?php echo $_POST["nom"]; ?><br><br>
Welcome <?php echo $_POST["numero"]; ?><br>






<?php include 'peu.php';?>


</body>
</html>