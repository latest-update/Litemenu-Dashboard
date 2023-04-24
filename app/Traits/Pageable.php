<?php

namespace App\Traits;

trait Pageable
{
    public $currentPage;

    public function mount($currentPage)
    {
        $this->currentPage = $currentPage;
    }

    public function changePage ($page)
    {
        $this->currentPage = $page;
        $this->emitUp('changePage', $page);
    }

}
