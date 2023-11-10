<?php

namespace Admingate\Menu\Models;

use Admingate\Base\Casts\SafeContent;
use Admingate\Base\Enums\BaseStatusEnum;
use Admingate\Base\Models\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends BaseModel
{
    protected $table = 'menus';

    protected $fillable = [
        'name',
        'slug',
        'status',
    ];

    protected $casts = [
        'status' => BaseStatusEnum::class,
        'name' => SafeContent::class,
    ];

    protected static function boot()
    {
        parent::boot();

        static::deleting(function (Menu $menu) {
            MenuNode::where('menu_id', $menu->getKey())->delete();
        });
    }

    public function menuNodes(): HasMany
    {
        return $this->hasMany(MenuNode::class, 'menu_id');
    }

    public function locations(): HasMany
    {
        return $this->hasMany(MenuLocation::class, 'menu_id');
    }
}
