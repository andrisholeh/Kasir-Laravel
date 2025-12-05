<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\SaleDetail;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        $penjualan = Sale::with('customer')->get();
        return view('penjualan.index', compact('penjualan'));
    }

    public function create()
    {
        $pelanggan = Customer::all();
        $produk = Product::all();
        return view('penjualan.create', compact('pelanggan', 'produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'nullable|exists:customers,id',
            'tanggal' => 'required|date',
            'items' => 'required|array'
        ]);

        $penjualan = Sale::create([
            'customer_id' => $request->customer_id,
            'tanggal' => $request->tanggal,
            'total' => 0,
        ]);

        $total = 0;

        foreach ($request->items as $item) {

            $produk = Product::find($item['product_id']);

            if ($produk->stok < $item['jumlah']) {
                return back()->with('error', "Stok {$produk->nama_barang} tidak cukup!");
            }

            // insert detail
            SaleDetail::create([
                'sale_id' => $penjualan->id,
                'product_id' => $produk->id,
                'jumlah' => $item['jumlah'],
                'harga' => $item['harga'],
                'subtotal' => $item['jumlah'] * $item['harga'],
            ]);

            // kurangi stok
            $produk->stok -= $item['jumlah'];
            $produk->save();

            $total += $item['jumlah'] * $item['harga'];
        }

        $penjualan->total = $total;
        $penjualan->save();

        return redirect()->route('penjualan.index')->with('success', 'Penjualan berhasil dibuat');
    }
}