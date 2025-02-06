
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
$path = "/php/act2.php";

$date = date("Y-m-d"); 
?>

<div class='missatge'>
<h2>Aquest fitxer és: <?php echo basename ($path); ?></h2>
</div>

<div class='data'>
<h3>El dia d'avui és: <?php echo $date; ?></h3>
</div>

<?php include 'peu.php';?>


</body>
</html>



