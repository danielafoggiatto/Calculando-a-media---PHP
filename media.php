

<?php

echo "<h2>Calculando a média de 3 números:</h2>";
echo "<h3>Digite os 3 números:</h3>";
echo "<form method='get' action='media.php'>";
echo "Número 1: <input type='number' name='n1' required/><br/>";
echo "Número 2: <input type='number' name='n2' required/><br/>";
echo "Número 3: <input type='number' name='n3' required/><br/>";
echo "<input type='submit' value='Calcular Média'/>";

echo "</form>";
echo "<br/><a href='media.php'>Reiniciar</a>";

if (isset($_GET["n1"]) && isset($_GET["n2"]) && isset($_GET["n3"])) {
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];

    $media = ($n1 + $n2 + $n3) / 3;
    echo "<h2>A média dos números $n1, $n2 e $n3 é: </h2>";
    echo "<h1>" . number_format($media, 2) . "</h1>";
}
