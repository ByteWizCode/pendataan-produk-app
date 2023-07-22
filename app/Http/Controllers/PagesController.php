<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function dashboard(): View
    {
        $staff_count = User::where('role', 'staff')->get()->count();
        $pelanggan_count = User::where('role', 'pelanggan')->get()->count();
        $produk_count = Produk::all()->count();
        $pesanan_count = Auth::user()->role == 'pelanggan' ? Pesanan::where('pelanggan_id', Auth::user()->id)->get()->count() : Pesanan::all()->count();
        return view('dashboard', compact('staff_count', 'pelanggan_count', 'produk_count', 'pesanan_count'));
    }
}
