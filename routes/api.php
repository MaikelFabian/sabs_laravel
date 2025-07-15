<?php

use App\Http\Controllers\ModuloController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\TipoSitioController;
use App\Http\Controllers\UnidadmedidaController;
use App\Http\Controllers\OpcionController;
use App\Http\Controllers\CentroController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\TituladoController;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\AreacentroController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\TipomaterialController;
use App\Http\Controllers\CategoriamaterialController;
use App\Http\Controllers\RolPermisoOpcionController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\TipomovimientoController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\DetallesController;


use Illuminate\Support\Facades\Route;


Route::post('register', [AuthController::class, 'register'])
    ->name('auth.register');
Route::post('login', [AuthController::class, 'login'])
    ->name('auth.login');

//Route::middleware(['auth:api'])->group(function () {
//Route::get('/user', [AuthController::class, 'getUser']);
//Route::post('/logout', [AuthController::class, 'logout']);
Route::middleware(['auth:api'])->group(function () {

Route::apiResource('municipios', MunicipioController::class);
Route::apiResource('areas', AreaController::class);
Route::apiResource('fichas', FichaController::class);
Route::apiResource('tipositios', TipoSitioController::class);
Route::apiResource('unidadmedidas', UnidadmedidaController::class);
Route::apiResource('opciones', OpcionController::class);
Route::apiResource('centros', CentroController::class);
Route::apiResource('permisos', PermisoController::class);
Route::apiResource('titulados', TituladoController::class);
Route::apiResource('sitios', SitioController::class);
Route::apiResource('areacentros', AreacentroController::class);
Route::apiResource('materiales', MaterialController::class);
Route::apiResource('tipos_materiales', TipomaterialController::class);
Route::apiResource('categorias_materiales', CategoriamaterialController::class);
Route::apiResource('rol_permiso_opcion', RolPermisoOpcionController::class);
Route::apiResource('roles', RolController::class);
Route::apiResource('personas', PersonaController::class);
Route::apiResource('tipomovimientos', TipomovimientoController::class);
Route::apiResource('movimientos', MovimientoController::class);
Route::apiResource('sedes', SedeController::class);
Route::apiResource('detalles', DetallesController::class);
});