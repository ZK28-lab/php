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
$path = "/php/act5.php";
?>

<div class='missatge'>
<h2>Aquest fitxer és: <?php echo basename ($path); ?></h2>
</div>



<p class="Salut"> Hola <?php echo $_POST["nom"]; ?>! </p>

<p class="Edat"> Tens <?php echo $_POST["numero"]; ?> anys Felicitats!! </p> <br>



<?php 
function felicitarAniversariEspelmes($edat) {
    for ($i = 1; $i <= $edat; $i++ ) {
        echo '<img src="espelma.png" alt="espelma" width="10%" height="10%">';

        if ($i % 10 == 0) {
            echo '<br>';
        }
    }
}

//Verificacio Formulari

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["numero"]) && is_numeric($_POST["numero"])) {
        $edatUsuari = intval($_POST["numero"]); // Convertir a número sencer
        echo "<h2>Feliç aniversari!</h2>";
        felicitarAniversariEspelmes($edatUsuari);

} else {
    echo "<p>Si us plau, introdueix una edat vàlida.</p>";
}

}
?>


<?php include 'peu.php';?>


</body>
</html>