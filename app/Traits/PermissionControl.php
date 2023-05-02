<?php

namespace App\Traits;

trait PermissionControl
{
    /** var User $this */

    public function giveOwner(): void
    {
        $this->assignRole('Owner');
    }

    public function giveManager(): void
    {
        $this->assignRole('Manager');
    }
}
