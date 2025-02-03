<?php include ('cap.php'); ?>
<?php echo '<h3>Aquest fitxer és '.basename(__FILE__).'</h3>'; ?>

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
    echo "<p> Vector de números parells: " . implode(',', $vectorParells) . "</p>

    //Mostra la longitud del vector de números parells 
    echo "<p>Total de númeroxs parells: " . count($vectorParells) . "</p>";
} else {
    echo "<p>No s'ha rebut cap dada del formulari.</p>";
}
?>
<?php include ('peu.php');?>