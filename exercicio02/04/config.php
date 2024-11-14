<?php
// config.php

// Função para autoload de classes
function autoload($className) {
    include_once $className . '.php'; // Carrega o arquivo da classe automaticamente
}

// Registrando a função de autoload
spl_autoload_register('autoload');
?>
