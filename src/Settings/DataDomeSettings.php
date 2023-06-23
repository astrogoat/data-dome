<?php

namespace Astrogoat\DataDome\Settings;

use Astrogoat\DataDome\Actions\DataDomeAction;
use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class DataDomeSettings extends AppSettings
{
    // public string $url;

    public function rules(): array
    {
        return [
            // 'url' => Rule::requiredIf($this->enabled === true),
        ];
    }

    // protected static array $actions = [
    //     DataDomeAction::class,
    // ];

    // public static function encrypted(): array
    // {
    //     return ['access_token'];
    // }

    public function description(): string
    {
        return 'Interact with DataDome.';
    }

    public static function group(): string
    {
        return 'data-dome';
    }
}
