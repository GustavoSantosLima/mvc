<?php
// Define o caminho para o arquivo .env
$envFilePath = __DIR__ . '/../.env';

// Verifica se o arquivo .env existe
if (file_exists($envFilePath)) {
    // Lê o conteúdo do arquivo .env
    $envContent = file_get_contents($envFilePath);

    // Divide o conteúdo do arquivo .env em linhas
    $lines = explode(PHP_EOL, $envContent);

    // Itera sobre cada linha e define as variáveis de ambiente
    foreach ($lines as $line) {
        $line = trim($line);
        if ($line && strpos($line, '=') !== false) {
            list($key, $value) = explode('=', $line, 2);
            $_ENV[$key] = $value;
            putenv("$key=$value");
        }
    }
}