<?php

namespace App\Traits;

trait Pageable
{
    public $currentPage;

    public function changePage ($page)
    {
        $this->currentPage = $page;
    }

    public function mount()
    {
        $path = url()->current();
        $segments = explode('/', $path);
        $this->currentPage = end($segments);
    }

}
