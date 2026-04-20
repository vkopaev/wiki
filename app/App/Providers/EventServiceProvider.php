<?php

namespace BookStack\App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use SocialiteProviders\Authentik\AuthentikExtendSocialite;
use SocialiteProviders\Manager\SocialiteWasCalled;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, string>>
     */
    protected $listen = [
        SocialiteWasCalled::class => [
            AuthentikExtendSocialite::class . '@handle',
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }

    /**
     * Overrides the registration of Laravel's default email verification system
     */
    protected function configureEmailVerification(): void
    {
        //
    }
}
