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
Route::get('/certificate/{id}', [CertificateController::class, 'show']);

// cv
Route::get('/cv', [CVController::class, 'index']);

// Route::get('/download_cv', function () {
//     return view('cv_layout');
// });


