<?php

namespace Admingate\Menu\Facades;

use Admingate\Menu\Menu;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Menu\Menu
 */
class MenuFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Menu::class;
    }
}
