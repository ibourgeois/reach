<?php

namespace iBourgeois\Reach\Providers;

use Illuminate\Support\ServiceProvider;

class ReachServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->publishMigrations();
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }

    /** 
     * Publish the database migrations.
     * 
     * @return void
     */
    public function publishMigrations(): void
    {
        if ($this->app->runningInConsole()) {
            if (! class_exists('CreateListsTable')) {
                $this->publishes([
                    __DIR__ . '/../../database/migrations/2025_05_14_062102_create_lists_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_lists_table.php'),
                ], 'migrations');
            }
            if (! class_exists('CreateContactsTable')) {
                $this->publishes([
                    __DIR__ . '/../../database/migrations/2025_05_14_132500_create_contacts_table.php' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_contacts_table.php'),
                ], 'migrations');
            }
        }
    }
}
