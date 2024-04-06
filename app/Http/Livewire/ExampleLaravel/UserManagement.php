<?php

namespace App\Http\Livewire\ExampleLaravel;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UserManagement extends Component
{
    public function render()
    {
        $response = Http::get('http://localhost:3000/api/getUsuarios');
        $users = json_decode($response->body());

        $response = Http::get('http://localhost:3000/api/puertas', [
            'emailAdmin' => 'Admin3gmail.com',
        ]);
        $doors = json_decode($response->body());

        return view('livewire.example-laravel.user-management', compact('users', 'doors'));
    }
}
