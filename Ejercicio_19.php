<?php
    $num = $_POST["num"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 19</title>
</head>
<body>
    <h2>Tabla de multiplicar del <?php echo $num; ?></h2>
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <p><?php echo $num; ?> x <?php echo $i; ?> = <?php echo $num * $i; ?></p>
    <?php endfor; ?>
    <a href="index.php">Volver al menú</a>
</body>
</html>