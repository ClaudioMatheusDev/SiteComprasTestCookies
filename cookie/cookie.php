<?php

ob_start();

if(isset($_COOKIE['produtos'])){
    echo 'Você já passou por aqui!';
    $ler = $_COOKIE['produtos'];
    echo "Seu carrinho de compras têm: $ler";
} else{
    echo 'Você NUNCA passou por aqui';
    setcookie('produtos', 'tenis1,tenis2,tenis3', time() + 360);
    
}
ob_end_flush();
?>
