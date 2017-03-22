<?php namespace EONConsulting\EmailSMS;

use Illuminate\Support\ServiceProvider;

/**
 * Class PHPStencilServiceProvider
 * @package EONConsulting\EmailSMS
 */
class EmailSMSServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->bind( 'emailsms', function () {
            return new emailsms();
        });
    }

    /**
     * What to boot with the package
     */
    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'emailsms');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'ph');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->publishes([
            __DIR__ . '/database/migrations' => $this->app->databasePath() . '/migrations'
        ], 'migrations');


        $this->publishes([
            __DIR__ . '/assets' => public_path('vendor/EmailSMS'), ], 'public');

        $this->publishes([
            __DIR__ . '/assets/ckeditor' => public_path('ckeditor'), ], 'public');
    }
}