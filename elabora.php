<?php


$nome = $_GET["nome"];
$cognome = $_GET["cognome"];
$message = $_GET["message"];

$messagelength = strlen($message);

$nomecognome = $nome . " " . $cognome;

//per mettere la prima lettera in stampatello

$nomecognomecorretti = ucfirst($nome) . " " . ucfirst($cognome);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hellp PHP World</title>
</head>
<body>
    
<h2>Hello, <?php echo $nomecognomecorretti; ?></h2>
<h3>your message was <?php echo $messagelength; ?> charachters long</h3>

</body>
</html>
