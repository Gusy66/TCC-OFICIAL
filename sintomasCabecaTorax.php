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
            
            <button type="checkbox" name="sintomas[]" value="tosse">Tosse</button><br>
            <input type="checkbox" name="sintomas[]" value="dor_de_cabeca">Dor de Cabeça<br>
            <input type="checkbox" name="sintomas[]" value="dores_no_corpo">Dores no Corpo<br>
            <input type="checkbox" name="sintomas[]" value="nauseas">Náuseas<br>
            <input type="checkbox" name="sintomas[]" value="vomitos">Vômitos<br>
            <input type="checkbox" name="sintomas[]" value="coriza">Coriza<br><br>

            <input type="submit" value="Enviar">
        </form>
    </section>
</body>
</html>