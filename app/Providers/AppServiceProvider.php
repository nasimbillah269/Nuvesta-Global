<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // the schema is defined by database/migrations only (no Sanctum token table)
        \Laravel\Sanctum\Sanctum::ignoreMigrations();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // skip while the database is still empty (e.g. running `php artisan migrate` on a fresh install)
        try {
            $general = \Schema::hasTable('generals') ? general() : null;
        } catch (\Throwable $e) {
            $general = null;
        }
        if (!$general) {
            return;
        }

        \Config::set("services.facebook.client_id", $general->fb_app_id);
        \Config::set("services.facebook.client_secret", $general->fb_app_secret);
        \Config::set("services.facebook.redirect", $general->fb_app_secret);

        \Config::set("services.google.client_id", $general->google_client_id);
        \Config::set("services.google.client_secret", $general->google_client_secret);
        \Config::set("services.google.redirect", $general->google_client_redirect_url);

        \Config::set("mail.mailers.smtp.transport", $general->mail_driver);
        \Config::set("mail.mailers.smtp.host", $general->mail_host);
        \Config::set("mail.mailers.smtp.port", $general->mail_port);
        \Config::set("mail.mailers.smtp.encryption", $general->mail_encryption);
        \Config::set("mail.mailers.smtp.username", $general->mail_username);
        \Config::set("mail.mailers.smtp.password", $general->mail_password);
    }
}
