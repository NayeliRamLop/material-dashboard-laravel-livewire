<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Tables extends Component
{
    public function render()
    {
        $response = Http::get('http://localhost:3000/api/getMovimientos', [
            'emailAdmin' => 'Admin2@gmail.com',
        ]);

        $movimientos = json_decode($response->body());

        return view('livewire.tables', compact('movimientos'));
    }
}
