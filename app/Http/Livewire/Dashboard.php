<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard');
    }
}
