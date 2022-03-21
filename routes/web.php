<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
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
    return view('welcome');
});

Route::get('/cv_alka', function () {
    return view('cv');
});

Route::get('/biodata_diri_alka', [BiodataController::class, 'biodata']);

Route::get('/halaman_awal', [BiodataController::class, 'halamanAwal']);

Route::get('/komentar-alka', [BiodataController::class, 'komentar']);


// Route::get('/data_diri_alka', function () {
//     return view('biodata_diri', [
//         "tittle" => "BIDOATA MUHAMAD AL KAUSAR RAMADHAN",
//         "text1" => "Muhamad Al Kausar Ramadhan",
//         "text2" => "19 Tahun",
//         "text3" => "Depok",
//         "text4" => "13 November 2002",
//         "text5" => "Software Developer / Web Developer",
//         "text6" => "Jalan Merapi Raya, Depok Timur. Jawa Barat",
//         "text7" => "Malang",
//         "text8" => "0855-7107-548",
//         "text9" => "SMK TARUNA BHAKTI",
//         "text10" => "Islam"
//     ]);
// });

