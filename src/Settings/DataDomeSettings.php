<?php

namespace Astrogoat\DataDome\Settings;

use Illuminate\Validation\Rule;
use Helix\Lego\Settings\AppSettings;

class DataDomeSettings extends AppSettings
{
    public string $js_key;

    public function rules(): array
    {
        return [
             'js_key' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public static function encrypted(): array
    {
        return ['js_key'];
    }

    public function description(): string
    {
        return 'Add DataDome Js files.';
    }

    public static function group(): string
    {
        return 'data-dome';
    }
}
