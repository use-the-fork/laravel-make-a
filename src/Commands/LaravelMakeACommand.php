<?php

namespace UseTheFork\LaravelMakeA\Commands;

use Illuminate\Console\Command;

class LaravelMakeACommand extends Command
{
    public $signature = 'laravel-make-a';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
