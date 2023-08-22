<!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
    <link rel="stylesheet" type="text/css" href="StyleCalculadora.css">

</head>
<body>
    <h2>Calculadora PHP</h2>
    <form action="calculadora.php" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br>
        
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br>
        
        <label for="operation">Operación:</label>
        <select name="operation">
            <option value="sum">Suma</option>
            <option value="subtract">Resta</option>
            <option value="multiply">Multiplicación</option>
            <option value="divide">División</option>
        </select><br>
        
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        
        switch ($operation) {
            case "sum":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "No se puede dividir por cero";
                }
                break;
            default:
                $result = "Operación no válida";
                break;
        }
        
        echo "<p>Resultado: $result</p>";
    }
    ?>
</body>
</html>
