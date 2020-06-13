<?php

namespace App\Providers;

use App\Contracts\CategoryContract;
use App\Contracts\AttributeContract;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CategoryRepository;
use App\Repositories\AttributeRepository;

class RepositoryServiceProvider extends ServiceProvider {

    protected $repositories = [
        CategoryContract::class => CategoryRepository::class,
        AttributeContract::class => AttributeRepository::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register() {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        //
    }
}
