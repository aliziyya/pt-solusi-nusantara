<?php

namespace App\Http\Controllers;

use App\Models\Langganan;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LanggananController extends Controller
{
    public function create(Product $product)
    {
        return view('pages.form_langganan', compact('product'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_telepon' => 'required|string|max:20',
            'alamat' => 'required|string',
            'metode_pembayaran' => 'required|in:Transfer Bank',
            'bukti_pembayaran' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $buktiPembayaran = $request->file('bukti_pembayaran')
            ->store('bukti_pembayaran', 'public');

        Langganan::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'nama' => $request->nama,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
            'metode_pembayaran' => $request->metode_pembayaran,
            'bukti_pembayaran' => $buktiPembayaran,
            'status' => 'Menunggu',
        ]);

        return redirect('/produk')->with('success', 'Pengajuan langganan berhasil dikirim!');
    }

    public function history()
    {
        $langganans = Langganan::with([
            'product',
            'riwayatStatus' => function ($query) {
                $query->orderBy('created_at', 'asc');
            }
        ])
        ->where('user_id', Auth::id())
        ->latest()
        ->get();

        return view('pages.riwayat_langganan', compact('langganans'));
    }
}
