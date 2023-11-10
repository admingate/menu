<?php

namespace Admingate\Menu\Providers;

use Admingate\Base\Events\DeletedContentEvent;
use Admingate\Menu\Listeners\DeleteMenuNodeListener;
use Admingate\Menu\Listeners\UpdateMenuNodeUrlListener;
use Admingate\Slug\Events\UpdatedSlugEvent;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        UpdatedSlugEvent::class => [
            UpdateMenuNodeUrlListener::class,
        ],
        DeletedContentEvent::class => [
            DeleteMenuNodeListener::class,
        ],
    ];
}
