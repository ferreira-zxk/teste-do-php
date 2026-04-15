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
