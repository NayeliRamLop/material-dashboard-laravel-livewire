<?php

namespace App\Http\Livewire\ExampleLaravel;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class UserManagement extends Component
{
    public $username;
    public $email;
    public $emailAdmin;
    public $rfid;
    public $showModal = false;
    public $users;
    public $doors;

    public function saveChanges()
    {
        $response = Http::post('http://localhost:3000/api/register', [
            'username' => $this->username,
            'email' => $this->email,
            'emailAdmin' => 'Admin2@gmail.com',
            'rfid' => $this->rfid,
        ]);

        if ($response->successful()) {
            session()->flash('message', 'Success!');
        } else {            
            session()->flash('error', 'Failed!');
        }

        $this->showModal = false;
    }

    public function hydrate()
    {
        $responseUsers = Http::get('http://localhost:3000/api/getUsuarios', [
            'emailAdmin' => 'Admin2@gmail.com',
        ]);
        $this->users = json_decode($responseUsers->body());

        $responseDoors = Http::get('http://localhost:3000/api/puertas', [
            'emailAdmin' => 'Admin2@gmail.com',
        ]);
        $this->doors = json_decode($responseDoors->body());
    }


    public function render()
    {
        $responseUsers = Http::get('http://localhost:3000/api/getUsuarios', [
            'emailAdmin' => 'Admin3@gmail.com',
        ]);
        $this->users = json_decode($responseUsers->body());

        $responseDoors = Http::get('http://localhost:3000/api/puertas', [
            'emailAdmin' => 'Admin3@gmail.com',
        ]);
        $this->doors = json_decode($responseDoors->body());

        return view('livewire.example-laravel.user-management');
    }

   
}
