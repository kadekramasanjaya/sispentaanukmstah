<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\DashboardUkmController;
// UKM MUSIK
use App\Http\Controllers\DashboardUkmMusikController;
use App\Http\Controllers\TedUkmMusikController;
use App\Http\Controllers\DokumentasiUkmMusikController;
// UKM BAHASA INGGRIS
use App\Http\Controllers\DashboardUkmBahasaInggrisController;
use App\Http\Controllers\TedUkmBahasaInggrisController;
use App\Http\Controllers\DokumentasiUkmBahasaInggrisController;
// UKM DHARMAGITA
use App\Http\Controllers\DashboardUkmDharmagitaController;
use App\Http\Controllers\TedUkmDharmagitaController;
use App\Http\Controllers\DokumentasiUkmDharmagitaController;
// UKM DHARMAWACANA
use App\Http\Controllers\DashboardUkmDharmawacanaController;
use App\Http\Controllers\TedUkmDharmawacanaController;
use App\Http\Controllers\DokumentasiUkmDharmawacanaController;
// UKM FUTSAL
use App\Http\Controllers\DashboardUkmFutsalController;
use App\Http\Controllers\TedUkmFutsalController;
use App\Http\Controllers\DokumentasiUkmFutsalController;
// UKM JURNALISTIK
use App\Http\Controllers\DashboardUkmJurnalistikController;
use App\Http\Controllers\TedUkmJurnalistikController;
use App\Http\Controllers\DokumentasiUkmJurnalistikController;
// UKM KALIGRAFI
use App\Http\Controllers\DashboardUkmKaligrafiController;
use App\Http\Controllers\TedUkmKaligrafiController;
use App\Http\Controllers\DokumentasiUkmKaligrafiController;
// UKM MENWA
use App\Http\Controllers\DashboardUkmMenwaController;
use App\Http\Controllers\TedUkmMenwaController;
use App\Http\Controllers\DokumentasiUkmMenwaController;
// UKM PADUAN SUARA
use App\Http\Controllers\DashboardUkmPaduanSuaraController;
use App\Http\Controllers\TedUkmPaduanSuaraController;
use App\Http\Controllers\DokumentasiUkmPaduanSuaraController;
// UKM PENALARAN
use App\Http\Controllers\DashboardUkmPenalaranController;
use App\Http\Controllers\TedUkmPenalaranController;
use App\Http\Controllers\DokumentasiUkmPenalaranController;
// UKM PMI
use App\Http\Controllers\DashboardUkmPmiController;
use App\Http\Controllers\TedUkmPmiController;
use App\Http\Controllers\DokumentasiUkmPmiController;
// UKM PRAMUKA
use App\Http\Controllers\DashboardUkmPramukaController;
use App\Http\Controllers\TedUkmPramukaController;
use App\Http\Controllers\DokumentasiUkmPramukaController;
// UKM TABUH
use App\Http\Controllers\DashboardUkmTabuhController;
use App\Http\Controllers\TedUkmTabuhController;
use App\Http\Controllers\DokumentasiUkmTabuhController;
// UKM TARI
use App\Http\Controllers\DashboardUkmTariController;
use App\Http\Controllers\TedUkmTariController;
use App\Http\Controllers\DokumentasiUkmTariController;
// UKM TEATER
use App\Http\Controllers\DashboardUkmTeaterController;
use App\Http\Controllers\TedUkmTeaterController;
use App\Http\Controllers\DokumentasiUkmTeaterController;
// UKM UPAKARA
use App\Http\Controllers\DashboardUkmUpakaraController;
use App\Http\Controllers\TedUkmUpakaraController;
use App\Http\Controllers\DokumentasiUkmUpakaraController;
// UKM YOGA
use App\Http\Controllers\DashboardUkmYogaController;
use App\Http\Controllers\TedUkmYogaController;
use App\Http\Controllers\DokumentasiUkmYogaController;
use App\Http\Controllers\PortfolioMusikController;

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

// DASHBOARD
Route::get('/', [DashboardController::class, 'index']);
Route::get('/ukm', [UkmController::class, 'index']);

// --------------------------------------------------------------------------------------

// DASHBOARD ADMIN
Route::get('/dashboard', [DashboardUkmController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM MUSIK
// DASHBOARDs
Route::get('/dashboardukmmusik', [DashboardUkmMusikController::class, 'index']);
Route::get('/portfoliomusik', [PortfolioMusikController::class, 'index']);

// TAMBAH UPDATE DELETE
Route::get('/tedukmmusik', [TedUkmMusikController::class, 'index'])->name('tedukmmusik');
Route::get('/tedukmmusik/detailmusik/{id_musik}', [TedUkmMusikController::class, 'detail']);
Route::get('/tedukmmusik/addmusik', [TedUkmMusikController::class, 'addmusik']);
Route::post('/tedukmmusik/insert', [TedUkmMusikController::class, 'insert']);
Route::get('/tedukmmusik/editmusik/{id_musik}', [TedUkmMusikController::class, 'edit']);
Route::post('/tedukmmusik/updatemusik/{id_musik}', [TedUkmMusikController::class, 'update']);
Route::get('/tedukmmusik/delete/{id_musik}', [TedUkmMusikController::class, 'delete']);

// DOKUMENTASI
Route::get('/dokumentasiukmmusik', [DokumentasiUkmMusikController::class, 'index'])->name('dokumentasiukmmusik');
Route::get('/dokumentasiukmmusik/adddokumentasi', [DokumentasiUkmMusikController::class, 'adddokumentasi']);
Route::post('/dokumentasiukmmusik/insert', [DokumentasiUkmMusikController::class, 'insert']);
Route::get('/dokumentasiukmmusik/editdokumentasi/{id_dokumentasi_musik}', [DokumentasiUkmMusikController::class, 'edit']);
Route::post('/dokumentasiukmmusik/updatedokumentasi/{id_dokumentasi_musik}', [DokumentasiUkmMusikController::class, 'update']);
Route::get('/dokumentasiukmmusik/delete/{id_dokumentasi_musik}', [DokumentasiUkmMusikController::class, 'delete']);


// --------------------------------------------------------------------------------------

// UKM BAHASA INGGRIS
// DASHBOARD
Route::get('/dashboardukmbahasainggris', [DashboardUkmBahasaInggrisController::class, 'index']);
// TAMBAH UPDATE DELETE
// TAMBAH UPDATE DELETE
Route::get('/tedukmbahasainggris', [TedUkmBahasaInggrisController::class, 'index'])->name('tedukmbahasainggris');
Route::get('/tedukmbahasainggris/detailbahasainggris/{id_bahasainggris}', [TedUkmBahasaInggrisController::class, 'detail']);
Route::get('/tedukmbahasainggris/addbahasainggris', [TedUkmBahasaInggrisController::class, 'addbahasainggris']);
Route::post('/tedukmbahasainggris/insert', [TedUkmBahasaInggrisController::class, 'insert']);
Route::get('/tedukmbahasainggris/editbahasainggris/{id_bahasainggris}', [TedUkmBahasaInggrisController::class, 'edit']);
Route::post('/tedukmbahasainggris/updatebahasainggris/{id_bahasainggris}', [TedUkmBahasaInggrisController::class, 'update']);
Route::get('/tedukmbahasainggris/delete/{id_bahasainggris}', [TedUkmBahasaInggrisController::class, 'delete']);
// DOKUMENTASI
Route::get('/dokumentasiukmbahasainggris', [DokumentasiUkmBahasaInggrisController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmbahasainggris', [DokumentasiUkmBahasaInggrisController::class, 'index'])->name('dokumentasiukmbahasainggris');
Route::get('/dokumentasiukmbahasainggris/adddokumentasi', [DokumentasiUkmBahasaInggrisController::class, 'adddokumentasi']);
Route::post('/dokumentasiukmbahasainggris/insert', [DokumentasiUkmBahasaInggrisController::class, 'insert']);
Route::get('/dokumentasiukmbahasainggris/editdokumentasi/{id_dokumentasi_bahasainggris}', [DokumentasiUkmBahasaInggrisController::class, 'edit']);
Route::post('/dokumentasiukmbahasainggris/updatedokumentasi/{id_dokumentasi_bahasainggris}', [DokumentasiUkmBahasaInggrisController::class, 'update']);
Route::get('/dokumentasiukmbahasainggris/delete/{id_dokumentasi_bahasainggris}', [DokumentasiUkmBahasaInggrisController::class, 'delete']);

// --------------------------------------------------------------------------------------

// UKM DHARMA GITA
// DASHBOARD
Route::get('/dashboardukmdharmagita', [DashboardUkmDharmagitaController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmdharmagita', [TedUkmDharmagitaController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmmdharmagita', [DokumentasiUkmDharmagitaController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM DHARMA WACANA
// DASHBOARD
Route::get('/dashboardukmdharmawacana', [DashboardUkmDharmawacanaController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmdharmawacana', [TedUkmDharmawacanaController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmdharmawacana', [DokumentasiUkmDharmawacanaController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM FUTSAL
// DASHBOARD
Route::get('/dashboardukmfutsal', [DashboardUkmFutsalController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmfutsal', [TedUkmFutsalController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmfutsal', [DokumentasiUkmFutsalController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM JURNALISTIK
// DASHBOARD
Route::get('/dashboardukmjurnalistik', [DashboardUkmJurnalistikController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmjurnalistik', [TedUkmJurnalistikController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmjurnalistik', [DokumentasiUkmJurnalistikController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM KALIGRAFI
// DASHBOARD
Route::get('/dashboardukmkaligrafi', [DashboardUkmKaligrafiController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmkaligrafi', [TedUkmKaligrafiController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmkaligrafi', [DokumentasiUkmKaligrafiController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM MENWA
// DASHBOARD
Route::get('/dashboardukmmenwa', [DashboardUkmMenwaController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmmenwa', [TedUkmMenwaController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmmenwa', [DokumentasiUkmMenwaController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM PADUAN SUARA
// DASHBOARD
Route::get('/dashboardukmpaduansuara', [DashboardUkmPaduanSuaraController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmpaduansuara', [TedUkmPaduanSuaraController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmpaduansuara', [DokumentasiUkmPaduanSuaraController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM PENALARAN
// DASHBOARD
Route::get('/dashboardukmpenalaran', [DashboardUkmPenalaranController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmpenalaran', [TedUkmPenalaranController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmpenalaran', [DokumentasiUkmPenalaranController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM PMI
// DASHBOARD
Route::get('/dashboardukmpmi', [DashboardUkmPmiController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmpmi', [TedUkmPmiController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmpmi', [DokumentasiUkmPmiController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM PRAMUKA
// DASHBOARD
Route::get('/dashboardukmpramuka', [DashboardUkmPramukaController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmpramuka', [TedUkmPramukaController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmpramuka', [DokumentasiUkmPramukaController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM TABUH
// DASHBOARD
Route::get('/dashboardukmtabuh', [DashboardUkmTabuhController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmtabuh', [TedUkmTabuhController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmtabuh', [DokumentasiUkmTabuhController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM TARI
// DASHBOARD
Route::get('/dashboardukmtari', [DashboardUkmTariController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmtari', [TedUkmTariController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmtari', [DokumentasiUkmTariController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM TEATER
// DASHBOARD
Route::get('/dashboardukmteater', [DashboardUkmTeaterController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmteater', [TedUkmTeaterController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmteater', [DokumentasiUkmTeaterController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM UPAKARA
// DASHBOARD
Route::get('/dashboardukmupakara', [DashboardUkmUpakaraController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmupakara', [TedUkmUpakaraController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmupakara', [DokumentasiUkmUpakaraController::class, 'index']);

// --------------------------------------------------------------------------------------

// UKM YOGA
// DASHBOARD
Route::get('/dashboardukmyoga', [DashboardUkmYogaController::class, 'index']);
// TAMBAH UPDATE DELETE
Route::get('/tedukmyoga', [TedUkmYogaController::class, 'index']);
// DOKUMENTASI
Route::get('/dokumentasiukmyoga', [DokumentasiUkmYogaController::class, 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => 'user'], function () {
//     // DASHBOARD ADMIN
//     Route::get('/dashboard', [DashboardUkmController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM MUSIK
//     // DASHBOARDs
//     Route::get('/dashboardukmmusik', [DashboardUkmMusikController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmmusik', [TedUkmMusikController::class, 'index'])->name('tedukmmusik');
//     Route::get('/tedukmmusik/detailmusik/{id_musik}', [TedUkmMusikController::class, 'detail']);
//     Route::get('/tedukmmusik/addmusik', [TedUkmMusikController::class, 'addmusik']);
//     Route::post('/tedukmmusik/insert', [TedUkmMusikController::class, 'insert']);
//     Route::get('/tedukmmusik/editmusik/{id_musik}', [TedUkmMusikController::class, 'edit']);
//     Route::post('/tedukmmusik/updatemusik/{id_musik}', [TedUkmMusikController::class, 'update']);
//     Route::get('/tedukmmusik/delete/{id_musik}', [TedUkmMusikController::class, 'delete']);

//     // DOKUMENTASI
//     Route::get('/dokumentasiukmmusik', [DokumentasiUkmMusikController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM BAHASA INGGRIS
//     // DASHBOARD
//     Route::get('/dashboardukmbahasainggris', [DashboardUkmBahasaInggrisController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmbahasainggris', [TedUkmBahasaInggrisController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmbahasainggris', [DokumentasiUkmBahasaInggrisController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM DHARMA GITA
//     // DASHBOARD
//     Route::get('/dashboardukmdharmagita', [DashboardUkmDharmagitaController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmdharmagita', [TedUkmDharmagitaController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmmdharmagita', [DokumentasiUkmDharmagitaController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM DHARMA WACANA
//     // DASHBOARD
//     Route::get('/dashboardukmdharmawacana', [DashboardUkmDharmawacanaController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmdharmawacana', [TedUkmDharmawacanaController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmdharmawacana', [DokumentasiUkmDharmawacanaController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM FUTSAL
//     // DASHBOARD
//     Route::get('/dashboardukmfutsal', [DashboardUkmFutsalController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmfutsal', [TedUkmFutsalController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmfutsal', [DokumentasiUkmFutsalController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM JURNALISTIK
//     // DASHBOARD
//     Route::get('/dashboardukmjurnalistik', [DashboardUkmJurnalistikController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmjurnalistik', [TedUkmJurnalistikController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmjurnalistik', [DokumentasiUkmJurnalistikController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM KALIGRAFI
//     // DASHBOARD
//     Route::get('/dashboardukmkaligrafi', [DashboardUkmKaligrafiController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmkaligrafi', [TedUkmKaligrafiController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmkaligrafi', [DokumentasiUkmKaligrafiController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM MENWA
//     // DASHBOARD
//     Route::get('/dashboardukmmenwa', [DashboardUkmMenwaController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmmenwa', [TedUkmMenwaController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmmenwa', [DokumentasiUkmMenwaController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM PADUAN SUARA
//     // DASHBOARD
//     Route::get('/dashboardukmpaduansuara', [DashboardUkmPaduanSuaraController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmpaduansuara', [TedUkmPaduanSuaraController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmpaduansuara', [DokumentasiUkmPaduanSuaraController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM PENALARAN
//     // DASHBOARD
//     Route::get('/dashboardukmpenalaran', [DashboardUkmPenalaranController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmpenalaran', [TedUkmPenalaranController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmpenalaran', [DokumentasiUkmPenalaranController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM PMI
//     // DASHBOARD
//     Route::get('/dashboardukmpmi', [DashboardUkmPmiController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmpmi', [TedUkmPmiController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmpmi', [DokumentasiUkmPmiController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM PRAMUKA
//     // DASHBOARD
//     Route::get('/dashboardukmpramuka', [DashboardUkmPramukaController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmpramuka', [TedUkmPramukaController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmpramuka', [DokumentasiUkmPramukaController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM TABUH
//     // DASHBOARD
//     Route::get('/dashboardukmtabuh', [DashboardUkmTabuhController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmtabuh', [TedUkmTabuhController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmtabuh', [DokumentasiUkmTabuhController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM TARI
//     // DASHBOARD
//     Route::get('/dashboardukmtari', [DashboardUkmTariController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmtari', [TedUkmTariController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmtari', [DokumentasiUkmTariController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM TEATER
//     // DASHBOARD
//     Route::get('/dashboardukmteater', [DashboardUkmTeaterController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmteater', [TedUkmTeaterController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmteater', [DokumentasiUkmTeaterController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM UPAKARA
//     // DASHBOARD
//     Route::get('/dashboardukmupakara', [DashboardUkmUpakaraController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmupakara', [TedUkmUpakaraController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmupakara', [DokumentasiUkmUpakaraController::class, 'index']);

//     // --------------------------------------------------------------------------------------

//     // UKM YOGA
//     // DASHBOARD
//     Route::get('/dashboardukmyoga', [DashboardUkmYogaController::class, 'index']);
//     // TAMBAH UPDATE DELETE
//     Route::get('/tedukmyoga', [TedUkmYogaController::class, 'index']);
//     // DOKUMENTASI
//     Route::get('/dokumentasiukmyoga', [DokumentasiUkmYogaController::class, 'index']);
//     Auth::routes();
// });