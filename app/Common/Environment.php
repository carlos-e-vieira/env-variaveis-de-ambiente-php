<?php

declare(strict_types=1);

namespace App\Common;

class Environment
{
    // Responsável por carregar as variáveis de amabiente
    public static function load($dir): bool
    {
        // Verifica se o arquivo .env existe
        if (!file_exists($dir . '/.env')) {
            return false;
        }

        // Define as variáveis de ambiente
        $lines = file($dir . '/.env');

        foreach ($lines as $line) {
            putenv(trim($line));
        }

        return true;

        // echo '<pre>';
        // print_r($lines);
        // echo '</pre>'; exit;
    }
}
