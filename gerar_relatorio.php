<?php
require('fpdf.php');

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

// obtém as informações dos pacientes do banco de dados
$sql = "SELECT nome, sintoma1, sintoma2, sintoma3, sintoma4, sintoma5, sintoma6 FROM ficha";
$result = mysqli_query($conn, $sql);

// cria um novo objeto FPDF
$pdf = new FPDF();
$pdf->AddPage();

// define a fonte do cabeçalho e imprime o título
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Relatório de Sintomas',0,1,'C');

// define a fonte do conteúdo e imprime as informações dos pacientes
$pdf->SetFont('Arial','',12);
while ($row = mysqli_fetch_assoc($result)) {
    $pdf->Cell(30,10,'Nome:',0,0);
    $pdf->Cell(50,10,$row['nome'],0,1);

    $pdf->Cell(30,10,'Sintomas:',0,0);
    $sintomas = "";
    for ($i = 1; $i <= 6; $i++) {
        $sintoma = $row['sintoma'.$i];
        if (!empty($sintoma)) {
            $sintomas .= $sintoma . ', ';
        }
    }
    $pdf->Cell(0,10,substr($sintomas, 0, -2),0,1);
}

// faz o download do arquivo PDF
$pdf->Output('relatorio.pdf', 'D');

?>


<!DOCTYPE html>
<html>
<head>
    <title>Botão de Download em HTML</title>
</head>
<body>
    <h1>Relatório de Sintomas</h1>
    <p>Clique no botão abaixo para baixar o relatório em PDF:</p>
    <a href="gerar_relatorio.php" download>
        <button type="button">Baixar Relatório</button>
    </a>
</body>
</html>
