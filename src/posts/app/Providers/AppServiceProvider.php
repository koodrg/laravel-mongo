<?php

namespace App\Providers;

use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(Client::class, function () {
            return ClientBuilder::create()
                ->setHosts(config('elasticsearch.config'))
                ->build();
        });

        $this->app->bind(
            'App\Domain\Post\Repositories\PostRepositoryInterface',
            'App\Infrastructure\Repositories\PostRepository'
        );

        $this->app->bind(
            'App\Domain\Comment\Repositories\CommentRepositoryInterface',
            'App\Infrastructure\Repositories\CommentRepository',
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
