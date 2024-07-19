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

        <!-- Aquí se imprimen los datos -->
        <div class="auditoria-wall">
            <p class="print"></p>
        </div>

        <!-- Aquí estan los botones -->
        <div class="auditoria-buttons">
            <button type="button" onclick="b_ventas()">ventas</button>
            <button type="button" onclick="b_pago()">pago</button>
            <button type="button" onclick="b_pago_ins()">inscripcion</button>
            <button type="button" onclick="b_caja()">caja</button>
            <button type="button" onclick="b_fijo()">gastos fijos</button>
            <button type="button" onclick="b_variable()">gastos variables</button>
            <button type="button" onclick="b_sueldos()">sueldos</button>
            <button type="button" onclick="b_comprar()">compras</button>
            <button type="button" onclick="b_inventario()">inventario</button>
            <button type="button" onclick="b_auditoria()">auditoria</button>
            <button type="button" onclick="clean()">Limpiar</button>
        </div>
        <br><br>

        <?php require_once "../layout/footer.php" ?>
        <script src="../js/auditoria.js"></script>
    </body>
</html>