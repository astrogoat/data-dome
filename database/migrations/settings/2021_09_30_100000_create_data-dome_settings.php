<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateDataDomeSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('data-dome.enabled', false);
        // $this->migrator->add('data-dome.url', '');
        // $this->migrator->addEncrypted('data-dome.access_token', '');
    }

    public function down()
    {
        $this->migrator->delete('data-dome.enabled');
        // $this->migrator->delete('data-dome.url');
        // $this->migrator->delete('data-dome.access_token');
    }
}
