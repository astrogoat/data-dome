<?php

namespace Astrogoat\DataDome\Actions;

use Helix\Lego\Apps\Actions\Action;

class DataDomeAction extends Action
{
    public static function actionName(): string
    {
        return 'DataDome action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
