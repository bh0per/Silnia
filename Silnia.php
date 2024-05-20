<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Silni</title>
</head>
<body>
    <h1>Kalkulator Silni</h1>
    <form method="post" action="">
        <label for="number">Podaj liczbę:</label>
        <input type="number" id="number" name="number" required>
        <button type="submit">Oblicz silnię</button>
    </form>

    <?php
    function factorial($n) {
        if ($n < 0) {
            return "Silnia nie jest zdefiniowana dla liczb ujemnych.";
        } elseif ($n == 0) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST["number"]);
        $result = factorial($number);
        echo "<h2>Silnia z {$number} wynosi: {$result}</h2>";
    }
    ?>
</body>
</html>
