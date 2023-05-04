<?php

namespace App\Traits;

trait Routeable
{

    public string $name;
    public string $to;

    public function loadContent ($route): void
    {
        $this->emit('changeContent', $route);
    }
}
