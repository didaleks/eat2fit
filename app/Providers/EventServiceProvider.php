<?php

namespace App\Providers;

use App\Models\Diet;
use App\Models\Page;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    public static function setUrl($model)
    {
        $newUrl = $model->fullUrl();
        if ($newUrl != $model->url) {
            $model->url = $newUrl;
        }
    }

    public static function setChildrensUrl($model)
    {
        if (count($model->childrens))
            foreach ($model->childrens as $children)
                if ($children->url != $children->fullUrl())
                    $children->save();
    }

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Diet::saved(function ($model) {
            $model->syncCategories();
        });

        Page::saving(function ($model) {
            self::setUrl($model);
        });

        Page::saved(function ($model) {
            self::setChildrensUrl($model);
        });
    }
}
