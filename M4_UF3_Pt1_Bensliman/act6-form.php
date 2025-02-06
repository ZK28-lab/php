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
$path = "/php/act6.php";
?>

<div class='missatge'>
<h2>Aquest fitxer és: <?php echo basename ($path); ?></h2>
</div>



<div class="formularis">

<div>

<h2>Introdueix una llista de números separats per comes</h2>
<form action="act6-respostaform.php" method="post">
<label for="numeros">Números:</label>
<input type="text" id="numeros" name="numeros" required>
<button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numeros'])) {
    $cadenaNumeros = $_POST['numeros'];
    $vectorNumeros = array_map('intval', explode(',', $cadenaNumeros));

    echo "<p>Vector original: " . htmlspecialchars($cadenaNumeros) .  "</p>";

    $vectorParells = array_filter($vectorNumeros, function($numero) {
        return $numero % 2 == 0;
    });

    echo "<p>Vector de números parells: " . implode(',', $vectorParells) . "</p>";
    echo "<p>Total de números parells: " . count($vectorParells) . "</p>";
}

?>


</div>

</div>







<?php include 'peu.php';?>


</body>
</html>