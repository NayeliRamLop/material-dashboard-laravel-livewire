<?php

namespace App\Livewire;

use Livewire\Component;

class Layout extends Component
{
    public function render()
    {
        return view(app.blade.php)
            ->layout('layouts.base');
    }
    
    
}
