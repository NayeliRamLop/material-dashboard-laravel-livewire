<?php

namespace App\Http\Controllers;

use App\models\cliente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
   
    public function index()
    {
        return cliente::all();
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(cliente $cliente)
    {
        //
    }

   
    public function update(Request $request, cliente $cliente)
    {
        //
    }

    
    public function destroy(cliente $cliente)
    {
        //
    }
}
