<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class Table extends Component
{

    public $dataValues;

    public $dataHeaders;
    
    public function render()
    {
        return view('livewire.layouts.table');
    }
}
