<?php

declare(strict_types=1);

namespace RectitudeOpen\FilamentPeople\Commands;

use Illuminate\Console\Command;

class FilamentPeopleCommand extends Command
{
    public $signature = 'filament-people';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
