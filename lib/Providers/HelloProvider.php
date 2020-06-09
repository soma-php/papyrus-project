<?php

namespace MyApp\Providers;

use Soma\Store;
use Soma\Repository;
use Soma\ServiceProvider;
use Psr\Container\ContainerInterface;

use MyApp\Hello;

class HelloProvider extends ServiceProvider
{
    public function install(ContainerInterface $c) : void
    {
        // Create paths required by the service
    }

    public function uninstall(ContainerInterface $c) : void
    {
        // Remove paths created by the service
    }

    public function refresh(ContainerInterface $c) : void
    {
        // Update paths that were created dependent on external configuration
    }

    public function register(ContainerInterface $c) : void
    {
        // Exists because of compatibility with \Illuminate\Support\ServiceProvider,
        // it's recommended to use getFactories and getExtensions instead since it allows
        // for compiling the definitions for much better performance.
    }

    public function boot(ContainerInterface $c) : void
    {
        // Runs when Container is created and all services are ready
    }

    public function ready(ContainerInterface $c) : void
    {
        // Runs when every service is ready
    }

    public function getCommands() : array
    {
        // Register commands
        return [
            \MyApp\Commands\HelloWorld::class,
        ];
    }

    public function getProviders() : array
    {
        // Allows for registering services this provider depends on
        return [
            // ...
        ];
    }

    public function getFactories() : array
    {
        // Return services to register
        return [
            'hello' => function(ContainerInterface $c) {
                return new Hello();
            },
        ];
    }

    public function getExtensions() : array
    {
        // Return services to extend
        return [
            'config' => function(Repository $config, ContainerInterface $c) {
                // ...

                return $config;
            },
            'paths' => function(Store $paths, ContainerInterface $c) {
                // ...

                return $paths;
            },
            'urls' => function(Store $urls, ContainerInterface $c) {
                // ...

                return $urls;
            },
        ];
    }
}
