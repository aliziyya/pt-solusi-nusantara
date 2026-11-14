<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Artikel;
use App\Models\Galeri;
use App\Models\Pesan;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanggananController;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/profile', function () {
    return view('pages.profile');
});

Route::get('/produk', function () {
    $products = Product::all();

    return view('pages.produk', compact('products'));
});

Route::get('/artikel', function () {
    $artikels = Artikel::orderBy('tanggal_publikasi', 'desc')->get();

    return view('pages.artikel', compact('artikels'));
});

Route::get('/galeri', function () {
    $galeris = Galeri::all();

    return view('pages.galeri', compact('galeris'));
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', function (Request $request) {
    $request->validate([
        'nama' => 'required',
        'email' => 'required|email',
        'no_telepon' => 'nullable',
        'pesan' => 'required',
    ]);

    Pesan::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'no_telepon' => $request->no_telepon,
        'pesan' => $request->pesan,
    ]);

    return redirect('/contact')->with('success', 'Pesan berhasil dikirim!');
});

Route::middleware('auth')->group(function () {
    Route::get('/langganan/{product}', [LanggananController::class, 'create'])
        ->name('langganan.create');

    Route::post('/langganan', [LanggananController::class, 'store'])
        ->name('langganan.store');

    Route::get('/riwayat-langganan', [LanggananController::class, 'history'])
        ->name('langganan.history');
});

Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'storeRegister'])->middleware('guest');

Route::get('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/login', [AuthController::class, 'storeLogin'])->middleware('guest');

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');
