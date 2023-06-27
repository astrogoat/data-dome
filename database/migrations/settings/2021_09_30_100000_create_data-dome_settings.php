<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateDataDomeSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('data-dome.enabled', false);
        $this->migrator->addEncrypted('data-dome.js_key', '');
    }

    public function down()
    {
        $this->migrator->delete('data-dome.enabled');
        $this->migrator->delete('data-dome.js_key');
    }
}
