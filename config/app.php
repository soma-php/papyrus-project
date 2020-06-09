<?php return [
    'name' => 'Papyrus Application',
    'version' => '1.0.0',
    'date-format' => false,
    'timezone' => 'Europe/Stockholm',
    'providers' => [
        \Papyrus\Providers\PapyrusProvider::class,
        \Papyrus\StarterTheme\StarterThemeProvider::class,
        \MyApp\Providers\HelloProvider::class,
    ],
    'aliases' => [
        'Collection' => \Illuminate\Support\Collection::class,
        'Repository' => \Soma\Repository::class,
        'Store' => \Soma\Store::class,
        'Manifest' => \Soma\Manifest::class,

        'App' => \Soma\Facades\App::class,
        'Config' => \Soma\Facades\Config::class,
        'Event' => \Soma\Facades\Event::class,

        'Content' => \Papyrus\Facades\Content::class,
        'Themes' => \Papyrus\Facades\Themes::class,
    ],
    'commands' => [
        \Soma\Commands\AppInstall::class,
        \Soma\Commands\AppUninstall::class,
        \Soma\Commands\AppRefresh::class,
        \Soma\Commands\AppTinker::class,
        \Soma\Commands\AppServe::class,
        \Soma\Commands\AppClearCache::class,
        \Papyrus\Commands\ContentRoutes::class,
        \Papyrus\Commands\ContentCompile::class,
    ]
];
