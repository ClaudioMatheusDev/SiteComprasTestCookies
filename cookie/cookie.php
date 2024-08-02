

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de COOKIES</title>
    <link rel="stylesheet" href="css/styles2.css">

</head>
<body>
    
<?php

ob_start();

if(isset($_COOKIE['produtos'])){
    echo '<h1>Você já passou por aqui!</h1>';
    $ler = $_COOKIE['produtos'];
    echo "<h1>Seu carrinho de compras têm: $ler</h1>";
} else{
    echo '<h1>Você NUNCA passou por aqui</h1>';
    setcookie('produtos', 'Tenis BONITÃO', time() + 120);
    
}
ob_end_flush();
?>

</body>
</html>