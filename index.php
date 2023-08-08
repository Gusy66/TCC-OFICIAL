<?php
// define as informações de conexão ao banco de dados
$host = "localhost";
$user = "root";
$password = "";
$database = "pinucare";

// cria uma conexão ao banco de dados
$conn = mysqli_connect($host, $user, $password, $database);

// verifica se a conexão foi bem sucedida
if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}

// Inicializa o contador de pontos
$pontos = 0;

// verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // obtém o nome e os sintomas do formulário
    $nome = $_POST["nome"];
    $sintomas = isset($_POST["sintomas"]) ? $_POST["sintomas"] : array();

    // insere as informações na tabela "pacientes"
    $sintoma1 = isset($sintomas[0]) ? $sintomas[0] : "";
    $sintoma2 = isset($sintomas[1]) ? $sintomas[1] : "";
    $sintoma3 = isset($sintomas[2]) ? $sintomas[2] : "";
    $sintoma4 = isset($sintomas[3]) ? $sintomas[3] : "";
    $sintoma5 = isset($sintomas[4]) ? $sintomas[4] : "";
    $sintoma6 = isset($sintomas[5]) ? $sintomas[5] : "";

    $pontos = count($sintomas);

    $sql = "INSERT INTO ficha (nome, sintoma1, sintoma2, sintoma3, sintoma4, sintoma5, sintoma6, pontos) VALUES ('$nome', '$sintoma1', '$sintoma2', '$sintoma3', '$sintoma4', '$sintoma5', '$sintoma6', $pontos)";


    if (mysqli_query($conn, $sql)) {
        echo "As informações foram adicionadas com sucesso!";
        // Redireciona para outra página após o envio das informações
        header("Location: frente.html");
        exit;
    } else {
        echo "Ocorreu um erro ao adicionar as informações: " . mysqli_error($conn);
    }
}



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
