<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Auditoria</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body class="body-auditoria">
        <?php require_once "../layout/header.php" ?>
        <div class="auditoria-wall">
            <p class="print"></p>
        </div>

        <div class="auditoria-buttons">
            <button type="button" onclick="b_ventas()">ventas</button>
            <button type="button" onclick="b_pago()">pago</button>
            <button type="button" onclick="b_pago_ins()">inscripcion</button>
            <button type="button" onclick="b_caja()">caja</button>
            <button type="button">gastos fijos</button>
            <button type="button">gastos variables</button>
            <button type="button">sueldos</button>
            <button type="button">precios-v</button>
            <button type="button">compras</button>
            <button type="button">inventario</button>
            <button type="button">auditoria</button>
            <button type="button">cerrar</button>
        </div>
        <?php require_once "../layout/footer.php" ?>
        <script src="../js/auditoria.js"></script>
    </body>
</html>