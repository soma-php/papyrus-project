<?php

namespace MyApp\Commands;

use Soma\Command;

class HelloWorld extends Command
{
    protected $signature = 'hello:world';
    protected $description = 'Say "Hello World"';

    public function handle()
    {
        $this->info(app('hello')->world());

        return 0;
    }
}