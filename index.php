<?php
// Declaração de uma variavel com string com aspas simples
$texto = 'A caixa d\'agua esta transbordando .';
?>
<html>
<head>
    <title>String com aspas simples no PHP</title>
</head>
<body>
    <p><?php echo $texto ; ?></p>
</body>
</html>


<?php
$produto = 'pizza';
$texto = "ele \"comprou\" uma $produto no Joey's.";
?>
<html>
    <head>
        <title>String com aspas duplas no PHP</title>
</head>
<body>
    <p><?php echo $texto ; ?>
</body>
</html>



<?php
$produto = 'pizza';
$texto = 'Ele comprou uma ' . $produto . 'no Joey\'s.';
?>
<html>
    <head>
        <title>String com aspas duplas no PHP</title>
</had>
<body>
    <p><?php echo $texto; ?></p>
</body>
</html>


<?php
// Declaração de uma variável NULL
$nulo = NULL;
?>


<?php
define ("NOMECLIENTE", "MARCOS DE MELO");
$endereco       = 'Rua das Violetas, 320';
$bairro         = 'Jd. Callegari';
$estado         = 'SP';
$cep            = '13.181-659';
$idade          = 18;
define ("RG", "1234567-x");
$fone           = '(99)  8888-9287';
?>

<html>
    <head>
        <title>Trabalhos com Variáveis</title>
        <meta http-equiv="content-Type" content="text/html; charset=uft=-8">
</head>
<body>
    <h1>Informações de Contato</h1>
    <p>Nome completo: <?php echo NOMECLIENTE; ?></p>
    <p><?php echo "$bairro - $estado - CEP: $cep";?></p>
    <p>Telefone: <?php echo $fone;?></p>
    <h2>Documentos</h2>
    <?php echo "<p>Idade: $idade | RG: ". RG. "</p>"?>
</body>
</html>