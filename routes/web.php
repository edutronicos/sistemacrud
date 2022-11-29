<?php

use App\Http\Controllers\AssetControlController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\InventoryController;
use App\Models\Image;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/funcionarios_index', [EmployeeController::class, 'index']);
Route::get('/funcionarios_novo', [EmployeeController::class, 'create']);
Route::post('/funcionarios_gravar', [EmployeeController::class, 'store']);
Route::get('/funcionarios_editar/{id}', [EmployeeController::class, 'edit']);
Route::post('/funcionarios_atualizar/{id}', [EmployeeController::class, 'update']);
Route::get('/funcionarios_del/{id}', [EmployeeController::class, 'destroy']);
Route::get('/sucesso', function() {
    return view('funcionarios.sucesso');
});

Route::get('/documentos', [DocumentController::class, 'index']);
Route::get('/documentos_index', [DocumentController::class, 'show']);
Route::get('/documentos_novo', [DocumentController::class, 'create']);
Route::post('/documentos_gravar', [DocumentController::class, 'store']);
Route::get('/documentos_del/{id}', [DocumentController::class, 'destroy'])->middleware(['auth', 'verified']);

Route::get('/timbrado', [PaperController::class, 'index']);
Route::get('/timbrado_novo', [PaperController::class, 'create']);
Route::post('/timbrado_gravar', [PaperController::class, 'store']);
Route::get('/timbrado_del/{id}', [PaperController::class, 'destroy'])->middleware(['auth', 'verified']);

Route::get('/certificado', [CertificateController::class, 'index']);
Route::get('/certificado_novo', [CertificateController::class, 'create']);
Route::post('/certificado_gravar', [CertificateController::class, 'store']);
Route::get('/certificado_del/{id}', [CertificateController::class, 'destroy']);

Route::get('/logos', [ImageController::class, 'index']);
Route::get('/logos_novo', [ImageController::class, 'create']);
Route::post('/logos_gravar', [ImageController::class, 'store']);
Route::get('/logos_del/{id}', [ImageController::class, 'destroy']);

Route::get('/patrimonial', [AssetControlController::class, 'index']);
Route::get('/patrimonial_novo_info', [AssetControlController::class, 'create_info']);
Route::get('/patrimonial_novo_movel', [AssetControlController::class, 'create_movel']);
Route::post('/patrimonial_gravar', [AssetControlController::class, 'store']);
Route::get('/patrimonial_editar/{id}', [AssetControlController::class, 'edit']);
Route::post('/patrimonial_atualizar/{id}', [AssetControlController::class, 'update']);
Route::get('/patrimonial_del/{id}', [AssetControlController::class, 'destroy']);
Route::get('/patrimonial/order/{id}', [AssetControlController::class, 'order']); //função para ordenar a tabela e fazer busca

Route::get('/almoxarifado', [InventoryController::class, 'index']);
Route::get('/almoxarifado_create', [InventoryController::class, 'create']);
Route::post('/almoxarifado_store_novo_item', [InventoryController::class, 'store_novo_item']);
Route::post('/almoxarifado_store_saida', [InventoryController::class, 'store_saida']);

Route::get('/almoxarifado', function() {
    return view('controle.almoxarifado.almoxarifado-index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
