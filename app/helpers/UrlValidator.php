<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\UrlValidator; // Asegúrate de importar tu clase al principio del archivo

class NombreDelControlador extends Controller
{
    public function validarUrl(Request $request)
    {
        $url = $request->input('url'); // Obtener la URL del request

        if (UrlValidator::isValid($url)) {
            // La URL es válida
            // Continúa con la lógica correspondiente...
        } else {
            // La URL no es válida
            // Maneja el caso, por ejemplo, retornando un mensaje de error
            return redirect()->back()->withErrors('La URL proporcionada no es válida.');
        }
    }
}
