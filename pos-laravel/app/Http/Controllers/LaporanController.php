<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Purchase;
use App\Models\Product;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function penjualan()
    {
        $penjualan = Sale::with('customer')->get();
        return view('laporan.penjualan', compact('penjualan'));
    }

    public function pembelian()
    {
        $pembelian = Purchase::with('supplier')->get();
        return view('laporan.pembelian', compact('pembelian'));
    }

    public function stok()
    {
        $stok = Product::all();
        return view('laporan.stok', compact('stok'));
    }
}