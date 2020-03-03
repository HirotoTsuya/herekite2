<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
     public function boot(UrlGenerator $url)
    {
      # �J�����ilocal�j��http�Ȃ̂ŁAhttps�ɂ��Ȃ�
      if (config('app.env') !== 'local') {
        $url->forceScheme('https');
      }
    }
}
