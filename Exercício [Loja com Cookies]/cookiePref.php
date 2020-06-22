<?php
    header("Location: index.php");
    $cod = $_POST['opcCategoria'];
    // 0 - Nada | 1 - Eletrônicos | 2 - Eletrodomésticos | 
    // 3 - Livros | 4 - Papelarias
    setcookie('idCategoria', $cod, time() + (60 * 5) ); // 5 minutos
?>