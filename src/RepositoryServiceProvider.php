<?php

namespace Ratno\Repository;

use Illuminate\Support\ServiceProvider;
use Ratno\Repository\Commands\MakeRepositoryCommand;

class RepositoryServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeRepositoryCommand::class
            ]);
        }
    }
}
