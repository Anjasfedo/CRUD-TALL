<?php

namespace App\Livewire\Layouts;

use Livewire\Component;

class SideBar extends Component
{

    public $navGroups;

    public function mount()
    {
        $this->navGroups = [
            (object) ['name' => 'Kanban', 'routeName' => 'home'],
            (object) ['name' => 'Users', 'routeName' => 'home'],
            (object) ['name' => 'Products', 'routeName' => 'home'],
        ];
    }
    
    public function render()
    {
        return view('livewire.layouts.side-bar');
    }
}
