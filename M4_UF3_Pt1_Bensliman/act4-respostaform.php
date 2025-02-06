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



<p class="Salut">Hola <?php echo $_POST["nom"]; ?></p>


<?php
if (isset($_POST['numero'])) {
    $quantity = (int)$_POST['numero']; 
    if ($quantity <= 35) { 
        echo "<p>tens $quantity anys, ets molt jove</p>"; 
    }

    else {
        echo "<p class='Adult'>has de pasar la ITV</p>";
    }
}
?>


<?php include 'peu.php';?>


</body>
</html>