<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/bootstrap/app.php';

return (new MattAllan\LaravelCodeStyle\Config())
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(app_path())
            ->in(config_path())
            ->in(database_path())
            ->notPath(database_path('migrations'))
            ->in(base_path('tests'))
    )
    ->setRules([
        '@Laravel' => true,
        '@Laravel:risky' => true,
        'declare_strict_types' => true,
    ])
    ->setRiskyAllowed(true);
