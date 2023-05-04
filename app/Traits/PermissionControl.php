<?php

namespace App\Traits;

trait PermissionControl
{
    /** var User $this */

    public function giveOwner(): void
    {
        $this->syncRoles([]);
        $this->assignRole('Owner');
    }

    public function giveManager(): void
    {
        $this->syncRoles([]);
        $this->assignRole('Manager');
    }

    public function giveSpecified(string $name): void
    {
        $this->syncRoles([]);
        $this->assignRole($name);
    }
}
