<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\UrlValidator; // Asegúrate de importar tu clase de validación de URL

class UserController extends Controller
{
    public function checkUrl(Request $request)
    {
        $url = $request->input('url'); // o $request->url, dependiendo de cómo estés enviando la URL

        if (UrlValidator::isValid($url)) {
            // La URL es válida
            // Aquí continúa tu lógica, por ejemplo, guardar la URL en la base de datos, redireccionar, etc.
        } else {
            // La URL no es válida
            // Aquí manejas el caso de error, por ejemplo, enviando un mensaje de error al usuario
            return back()->withErrors('La URL proporcionada no es válida.');
        }
    }
}
