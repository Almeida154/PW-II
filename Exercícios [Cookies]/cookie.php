<?php
	header("Location: index.php");
    $cor = $_POST['themeSelect'];
    setcookie('corCookie', $cor, time() + (60 * 5)); // 5 minutos
?>