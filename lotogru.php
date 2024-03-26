<?php
$escolha = null;
$valor = 0;
$empenho = $_POST["empenho"];
if (isset($_POST['checkboxes'])) {
    $escolha = $_POST['checkboxes'];
    echo "Seus números escolhidos são: ";
    foreach ($escolha as $numero) {
        echo $numero . ", ";
    }
    echo "<br>";
}

if ($escolha !== null) {

    $numeros_maquina = range(1, 50);

    shuffle($numeros_maquina);

    $numeros_maquina = array_slice($numeros_maquina, 0, 25);
}

sort($numeros_maquina);

echo "Números gerados pela máquina: ";
foreach ($numeros_maquina as $item) {
    echo $item . ", ";
}
$numeros_iguais = array_intersect($escolha, $numeros_maquina);
echo "<br>Números iguais: ";
foreach ($numeros_iguais as $item) {
    echo $item . ", ";
}
if (count($numeros_iguais)==0 or count($numeros_iguais)==25) {
    $valor = $empenho * 50;
    echo "<p>$valor</p>";
}elseif (count($numeros_iguais)==24) {
    $valor = $empenho * 24;
    echo "<p>$valor</p>";
}elseif (count($numeros_iguais)==23) {
    $valor = $empenho * 23;
    echo "<p>$valor</p>";
}elseif (count($numeros_iguais)==22) {
    $valor = $empenho * 22;
    echo "<p>$valor</p>";
}elseif (count($numeros_iguais)==21) {
    $valor = $empenho * 21;
    echo "<p>$valor</p>";
}else{
    echo "<p>Infelizmente não foi dessa vez</p>";
}
?>
