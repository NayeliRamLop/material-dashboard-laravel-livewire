<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class Dashboard extends Component
{   
    public $doors;

    public function toggleDoorStatus($doorId)
    {
        $door = array_filter($this->doors, function ($door) use ($doorId) {
            return $door->_id == $doorId;
        });
        
        if (!empty($door)) {
            $door = reset($door);
            $status = $door->status ? false : true;

            $response = Http::put("http://localhost:3000/api/puertas/{$doorId}", [
                'status' => $status,
                'alarma' => $door->alarma,
                'activacion' => $door->activacion
            ]);
        }

        $this->emit('doorToggled');
    }
    
    public function hydrate()
    {
        $responseDoors = Http::get('http://localhost:3000/api/puertas', [
            "emailAdmin" => "Admin2@gmail.com"
        ]);
        $this->doors = json_decode($responseDoors->body());
    }

    public function render()
    {
        $responseDoors = Http::get('http://localhost:3000/api/puertas', [
            "emailAdmin" => "Admin2@gmail.com"
        ]);
        $this->doors = json_decode($responseDoors->body());    

        return view('livewire.dashboard');
    }
}
