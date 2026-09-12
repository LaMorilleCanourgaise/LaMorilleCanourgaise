<?php
declare(strict_types=1);

/*
 * Pour CpanelFree :
 * 1. Copiez ce fichier en api/config.php.
 * 2. Remplacez les valeurs CHANGE_ME par celles de votre espace MySQL.
 * 3. Ne publiez jamais ce fichier avec un vrai mot de passe.
 */
return [
    'app_env' => 'production',
    'app_url' => 'https://lamorillecanourgaise.com.in',
    'contact_email' => 'lamorillecanourgaise@outlook.fr',
    'allowed_origins' => [
        'https://lamorillecanourgaise.com.in',
    ],
    'db' => [
        'host' => 'sql304.cpanelfree.com',
        'port' => 3306,
        'name' => 'cpfr_42897607_Lamorillecanourgaise',
        'user' => 'cpfr_42897607',
        'password' => 'CHANGE_ME',
        'charset' => 'utf8mb4',
    ],
    'session' => [
        'name' => 'site_yann_session',
        'secure' => true,
        'same_site' => 'Lax',
    ],
    'verification_ttl_minutes' => 30,
    'password_reset_ttl_minutes' => 30,
    'expose_dev_tokens' => false,
];
