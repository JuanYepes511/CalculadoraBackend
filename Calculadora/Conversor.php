<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Moneda</title>
    <link rel="stylesheet" type="text/css" href="StyleConversor.css">
</head>
<body>
    <div class="container">
        <h1>Conversor de Moneda</h1>
        <form method="post">
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
            $tasas = [
                "usd" => 0.00027,
                "eur" => 0.00023,
                "inr" => 19.89,
            ];
            
            $conversion = $monto * $tasas[$moneda_destino];
            $moneda_nombre = $moneda_destino === "usd" ? "Dólares (USD)" :
                             $moneda_destino === "eur" ? "Euros (EUR)" :
                             "Rupia India (INR)";
            
            echo "<div class='result'>$monto Pesos Colombianos equivalen a $conversion $moneda_nombre.</div>";
        }
        ?>
    </div>
</body>
</html>
