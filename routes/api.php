<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Psr\Http\Message\ServerRequestInterface;
use Tqdev\PhpCrudApi\Api;
use Tqdev\PhpCrudApi\Config;

use App\Http\Controllers\API\CentroController;
use App\Http\Controllers\API\NivelController;

use App\Http\Controllers\API\MateriaController;
use App\Http\Controllers\API\GrupoController;
use App\Http\Controllers\API\MatriculaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('centros', CentroController::class);

Route::apiResource('materias', MateriaController::class);
Route::apiResource('grupos',GrupoController::class);
Route::apiResource('matriculas', MatriculaController::class);


Route::get('centrosAPIRM', [CentroController::class, 'indexAPIRM']);

Route::apiResource('niveles', NivelController::class)->parameters(['niveles' => 'nivel']); /* Debido a como trabaja laravel, el parámetro que usamos cuando por ejemplos queremos sacar un nivel en concreto (Ej: http://instituto.test/api/niveles/1), nos lo coge como "nivele" (laravel interpreta que el singular de niveles es nivele). Si no le indicamos a laravel que el 
singular de niveles es nivel, nos hará la consulta pero nos devolverá todo a null */

Route::any('/{any}', function (ServerRequestInterface $request) {
    $config = new Config([
        'address' => env('DB_HOST'),
        'username' => env('DB_USERNAME'),
        'password' => env('DB_PASSWORD'),
        'database' => env('DB_DATABASE'),
        'basePath' => '/api',
    ]);
    $api = new Api($config);
    $response = $api->handle($request);
    return $response;
})->where('any', '.*');
