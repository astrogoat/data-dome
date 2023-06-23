<?php

namespace Astrogoat\DataDome\Commands;

use Illuminate\Console\Command;

class DataDomeCommand extends Command
{
    public $signature = 'data-dome';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
