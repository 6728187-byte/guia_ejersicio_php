<?php
    $monto = $_POST["monto"];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 17</title>
</head>
<body>
    <h2>Resultado del descuento</h2>
    <p>Monto original: $<?php echo number_format($monto, 2); ?></p>
    <?php if ($monto > 50): ?>
        <?php $descuento = $monto * 0.10; $total = $monto - $descuento; ?>
        <p>Descuento (10%): $<?php echo number_format($descuento, 2); ?></p>
        <p>Total a pagar: $<?php echo number_format($total, 2); ?></p>
    <?php else: ?>
        <p>No aplica descuento. Total a pagar: $<?php echo number_format($monto, 2); ?></p>
    <?php endif; ?>
    <a href="index.php">Volver al menú</a>
</body>
</html>