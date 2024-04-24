<?php

namespace GLisandro\AssetManagerPackage\Commands;

use Illuminate\Console\Command;

class AssetManagerPackageCommand extends Command
{
    public $signature = 'asset-manager-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
