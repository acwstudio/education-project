<?php

namespace App\Providers;

use App\Services\ApiIntegration\Organizations\OrganizationService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(
            abstract: OrganizationService::class,
            concrete: fn() => new OrganizationService(
                baseUrl: strval(config('services.organizations.url')),
                apiToken: strval(config('services.organizations.token')),
            )
        );
    }
}
