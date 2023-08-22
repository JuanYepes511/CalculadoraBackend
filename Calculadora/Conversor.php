<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Moneda</title>
    <link rel="stylesheet" type="text/css" href="StyleConversor.css">
</head>
<body>
    <h1>Conversor de Moneda</h1>
    <form action="conversor.php" method="post">
        <label for="monto">Monto en Pesos Colombianos:</label>
        <input type="number" name="monto" id="monto" required>
        <label for="moneda">Seleccione la moneda a la que desea convertir:</label>
        <select name="moneda" id="moneda">
            <option value="usd">Dólares (USD)</option>
            <option value="eur">Euros (EUR)</option>
            <option value="inr">Rupia India (INR)</option>
        </select>
        <input type="submit" value="Convertir">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $monto = $_POST["monto"];
        $moneda_destino = $_POST["moneda"];
        
        // Tasa de conversión aproximada (a modo de ejemplo)
        $tasa_usd = 0.00024;
        $tasa_eur = 0.00022;
        $tasa_inr = 0.020;
        
        $conversion = 0;
        $moneda_nombre = "";
        
        switch ($moneda_destino) {
            case "usd":
                $conversion = $monto * $tasa_usd;
                $moneda_nombre = "Dólares (USD)";
                break;
            case "eur":
                $conversion = $monto * $tasa_eur;
                $moneda_nombre = "Euros (EUR)";
                break;
            case "inr":
                $conversion = $monto * $tasa_inr;
                $moneda_nombre = "Rupia India (INR)";
                break;
        }
        
        echo "<p>$monto Pesos Colombianos equivalen a $conversion $moneda_nombre.</p>";
    }
    ?>
</body>
</html>
