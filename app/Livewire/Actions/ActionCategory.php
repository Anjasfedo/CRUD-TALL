<?php

namespace App\Livewire\Actions;

use App\Models\Category;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ActionCategory extends Component
{

    #[Validate] 
    public $name = '';
 
    public $description = '';
 
    public function rules()
    {
        return [
            'name' => 'required|min:5',
            'description' => 'required|min:5',
        ];
    }
 
    public function save()
    {
        $validated = $this->validate();
 
        Category::create($validated);
    }
    
    public function render()
    {
        return view('livewire.actions.action-category');
    }
}
