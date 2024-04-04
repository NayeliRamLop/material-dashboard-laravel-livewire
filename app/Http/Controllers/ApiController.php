namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\UrlValidator;

class ApiController extends Controller
{
    public function validateUrl(Request $request)
    {
        $url = $request->input('url'); // Asume que 'url' es el nombre del parámetro que envías en tu petición

        if (UrlValidator::isValid($url)) {
            // La URL es válida
            return response()->json(['message' => 'La URL es válida.']);
        } else {
            // La URL no es válida
            return response()->json(['message' => 'La URL proporcionada no es válida.'], 400);
        }
    }
}
