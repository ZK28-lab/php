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




<?php
//obté els numeros del formulari i converteix-los en un vector
if (isset($_POST['numeros'])) {
    $cadenaNumeros = $_POST['numeros'];
    $vectorNumeros = explode(',', $cadenaNumeros);

    //Mostra el vector original
    echo "<p>Vector original: " . $cadenaNumeros .  "</p>";

    // FIltra els numeros parells
    $vectorParells = array_filter($vectorNumeros, function($numero) {
        return $numero % 2 == 0; 
    });

    //Mostra el vector de numeros parells
    echo "<p> Vector de números parells: " . implode(',', $vectorParells) . "</p>";

    //Mostra la longitud del vector de números parells 
    echo "<p>Total de números parells: " . count($vectorParells) . "</p>";
} else {
    echo "<p>No s'ha rebut cap dada del formulari.</p>";
}
?>



<?php include 'peu.php';?>


</body>
</html>