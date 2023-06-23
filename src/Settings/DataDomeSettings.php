<?php

namespace Astrogoat\DataDome\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

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
