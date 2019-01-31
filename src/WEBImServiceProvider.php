<?php

namespace Encore\WEBIm;

use Illuminate\Support\ServiceProvider;

class WEBImServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(WEBIm $extension)
    {
        if (! WEBIm::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'webim');
        }

        if ($this->app->runningInConsole() && $assets = $extension->assets()) {
            $this->publishes(
                [$assets => public_path('vendor/laravel-admin-ext/webim')],
                'webim'
            );
        }

        $this->app->booted(function () {
            WEBIm::routes(__DIR__.'/../routes/web.php');
        });
    }
}