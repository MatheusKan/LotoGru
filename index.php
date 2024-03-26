<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotogru</title>
</head>
<body>
    <h1>LotoGru a Novidade de Guarulhos</h1>
    <form action="lotogru.php" method="POST" onsubmit="return validarFormulario()">
        <fieldset>
            <legend>Selecione no mínimo 25 números:</legend>
            <table>
                <?php
                for ($i = 1; $i <= 50; $i++) {
                    echo '<td><input type="checkbox" name="checkboxes[]" value="' . $i . '" onclick="limitarSelecao()">' . sprintf("%02d", $i) . '<br></td>';
                    if ($i % 10 == 0) {
                        echo '</tr><tr>';
                    }
                }
                ?>
            </table>
            <label for="empenho">Digite o valor a ser empenhado:</label>
            <input type="number" name="empenho" required>
            <input type="submit" value="Enviar">
        </fieldset>
    </form>
    <span id="contador"></span>
    <script>
        let contadorSelecionadas = 0;

        function limitarSelecao() {
            let checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
            let selecionadas = checkboxes.length;

            if (selecionadas > 25) {
                alert("Você só pode selecionar até 25 checkboxes.");
                checkboxes[checkboxes.length - 1].checked = false; 
            } else {
                contadorSelecionadas = selecionadas;
                updateCounter();
            }
        }

        function updateCounter() {
            document.getElementById("contador").textContent = contadorSelecionadas + " checkboxes selecionadas.";
        }

        function validarFormulario() {
            if (contadorSelecionadas < 25) {
                alert("Você deve selecionar no mínimo 25 checkboxes.");
                return false; 
            }
            return true;
        }
    </script>
</body>
</html>
