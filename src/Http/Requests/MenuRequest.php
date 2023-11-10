<?php

namespace Admingate\Menu\Http\Requests;

use Admingate\Base\Enums\BaseStatusEnum;
use Admingate\Support\Http\Requests\Request;
use Illuminate\Validation\Rule;

class MenuRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:120',
            'status' => Rule::in(BaseStatusEnum::values()),
        ];
    }
}
