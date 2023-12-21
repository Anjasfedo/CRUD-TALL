<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class Breadcrumb extends Component
{

    public $header;
    public function render()
    {
        return view('livewire.layouts.breadcrumb');
    }
}
