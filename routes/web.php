<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CVController;
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
    return redirect('/certificate');
});

// certificate
Route::get('/certificate', [CertificateController::class, 'index']);
Route::get('/certificate/add-cert', [CertificateController::class, 'create']);
Route::post('/certificate', [CertificateController::class, 'store']);
Route::get('/certificate/pdf/{id}', [CertificateController::class, 'pdf']);
Route::get('/certificate/pdf2/{id}', [CertificateController::class, 'pdf2']);

// cv
Route::get('/cv', [CVController::class, 'index']);
Route::get('/cv/download_cv', [CVController::class, 'pdf']);
Route::get('/cv/download_cv1', [CVController::class, 'pdf1']);
Route::get('/cv/download_cv2', [CVController::class, 'pdf2']);
Route::post('/cv/datadiri/{id}', [CVController::class, 'store_biodata']);
Route::post('/cv/pendidikan', [CVController::class, 'store_education']);
Route::post('/cv/seminar_training', [CVController::class, 'store_seminar']);
Route::post('/cv/proyek', [CVController::class, 'store_project']);
Route::post('/cv/org', [CVController::class, 'store_organization']);

// cv Update by Id
Route::post('/cv/pendidikan/{id}/edit', [CVController::class, 'update_education']);
Route::post('/cv/seminar/{id}/edit', [CVController::class, 'update_seminar']);
Route::post('/cv/proyek/{id}/edit', [CVController::class, 'update_project']);
Route::post('/cv/org/{id}/edit', [CVController::class, 'update_organization']);

// cv Delete by Id
Route::get('/cv/pendidikan/{id}/delete', [CVController::class, 'destroy_education']);
Route::get('/cv/seminar/{id}/delete', [CVController::class, 'destroy_seminar']);
Route::get('/cv/proyek/{id}/delete', [CVController::class, 'destroy_project']);
Route::get('/cv/org/{id}/delete', [CVController::class, 'destroy_organization']);
