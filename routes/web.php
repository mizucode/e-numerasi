<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MateriController;

Route::get('/', function () {
    return view('components.page.home');
})->name('home');

// Materi

Route::get('/materi', [MateriController::class, 'index'])->name('master-materi');

Route::get('/pembahasan', function () {
    return view('components.page.master-pembahasan', );
})->name('master-pembahasan');
Route::get('/soal', function () {
    return view('components.page.master-soal', );
})->name('master-soal');
Route::get('/model', function () {
    return view('components.page.master-model', );
})->name('master-model');



// Sub Materi

Route::get('/materi/aljabar', function () {
    return view('components.page.materi.aljabar', );
})->name('materi-aljabar');

Route::get('/materi/data-dan-ketidakpastian', function () {
    return view('components.page.materi.data-dan-ketidakpastian', );
})->name('materi-data-dan-ketidakpastian');

Route::get('/materi/bilangan', function () {
    return view('components.page.materi.bilangan', );
})->name('materi-bilangan');

Route::get('/materi/geometri-dan-pengukuran', function () {
    return view('components.page.materi.geometri-dan-pengukuran', );
})->name('materi-geometri-dan-pengukuran');

Route::get('/materi/model-translasi-geometri', function () {
    return view('components.page.materi.model-geometri', );
})->name('materi-model-geometri');

Route::get('/materi/model-translasi-bilangan', function () {
    return view('components.page.materi.model-bilangan', );
})->name('materi-model-bilangan');

Route::get('/materi/model-translasi-data-dan-ketidakpastian', function () {
    return view('components.page.materi.model-data', );
})->name('materi-model-data');

Route::get('/materi/model-aljabar', function () {
    return view('components.page.materi.model-aljabar', );
})->name('materi-model-aljabar');





// Pembahasan dan soal
Route::get('/materi/bilangan/pembahasan', function () {
    return view('components.page.pembahasan.bilangan', );
})->name('materi-bilangan-pembahasan');

Route::get('/materi/geometri-dan-pengukuran/pembahasan', function () {
    return view('components.page.pembahasan.geometri-dan-pengukuran', );
})->name('materi-geometri-dan-pengukuran-pembahasan');

Route::get('/materi/data-dan-ketidakpastian/pembahasan', function () {
    return view('components.page.pembahasan.data-dan-ketidakpastian', );
})->name('materi-data-dan-ketidakpastian-pembahasan');




Route::get('/materi/aljabar/pembahasan', function () {
    return view('components.page.pembahasan.aljabar', );
})->name('materi-aljabar-pembahasan');

Route::get('/materi/aljabar/soal', function () {
    return view('components.page.soal.aljabar', );
})->name('materi-aljabar-soal');

Route::get('/materi/aljabar/model', function () {
    return view('components.page.model.aljabar', );
})->name('materi-aljabar-model');



Route::get('/materi/bilangan/soal', function () {
    return view('components.page.soal.bilangan', );
})->name('materi-bilangan-soal');
Route::get('/materi/geometri/soal', function () {
    return view('components.page.soal.geometri', );
})->name('materi-geometri-soal');
Route::get('/materi/data-dan-ketidakpastian/soal', function () {
    return view('components.page.soal.data-dan-ketidakpastian', );
})->name('materi-data-dan-ketidakpastian-soal');