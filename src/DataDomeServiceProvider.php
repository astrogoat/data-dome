<?php

namespace Astrogoat\DataDome;

use Helix\Lego\Apps\App;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Astrogoat\DataDome\Settings\DataDomeSettings;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DataDomeServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('data-dome')
            ->settings(DataDomeSettings::class)
            ->includeFrontendViews(function (IncludeFrontendViews $views) {
                return $views->addToBody('data-dome::script');
            })
            ->migrations([
                __DIR__ . '/../database/migrations',
                __DIR__ . '/../database/migrations/settings',
            ])
            ->backendRoutes(__DIR__.'/../routes/backend.php')
            ->frontendRoutes(__DIR__.'/../routes/frontend.php');
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(fn (App $app) => $this->registerApp($app));
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('data-dome')->hasConfigFile()->hasViews();
    }
}
