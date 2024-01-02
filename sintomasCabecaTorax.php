<?php

require_once('dbconn.php');


?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Sintomas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section id="sintomas">
        <h1>Informe seus sintomas</h1>
        <form id="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            
            <label for="nome">Nome:</label>
            <input type="text" name="nome"><br><br>

            <label>Sintomas:</label><br>
            
            <input class="check-sintoma" type="checkbox" name="sintomas[]" value="dor-na-nuca">Dor na nuca</input><br>
            <input class="check-sintoma"type="checkbox" name="sintomas[]" value="nauseas">Dor na parte da frente da cabeça<br>
            <input class="check-sintoma"type="checkbox" name="sintomas[]" value="vomitos">Dor em cima da cabeça<br>
            <input class="check-sintoma"type="checkbox" name="sintomas[]" value="dores_no_corpo">Dor no peito esquerdo (coração)<br>
            <input class="check-sintoma"type="checkbox" name="sintomas[]" value="coriza">Coriza<br><br>

            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>