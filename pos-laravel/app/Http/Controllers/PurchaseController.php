<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\PurchaseDetail;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $pembelian = Purchase::with('supplier')->get();
        return view('pembelian.index', compact('pembelian'));
    }

    public function create()
    {
        $supplier = Supplier::all();
        $produk = Product::all();
        return view('pembelian.create', compact('supplier', 'produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'supplier_id' => 'required|exists:suppliers,id',
            'tanggal' => 'required|date',
            'items' => 'required|array',
        ]);

        // Insert pembelian utama
        $pembelian = Purchase::create([
            'supplier_id' => $request->supplier_id,
            'tanggal' => $request->tanggal,
            'total' => 0, // nanti dihitung dari detail
        ]);

        $total = 0;

        // Insert detail pembelian
        foreach ($request->items as $item) {
            $produk = Product::find($item['product_id']);

            PurchaseDetail::create([
                'purchase_id' => $pembelian->id,
                'product_id' => $produk->id,
                'jumlah' => $item['jumlah'],
                'harga' => $item['harga'],
                'subtotal' => $item['jumlah'] * $item['harga'],
            ]);

            // Update stok
            $produk->stok += $item['jumlah'];
            $produk->save();

            $total += $item['jumlah'] * $item['harga'];
        }

        $pembelian->total = $total;
        $pembelian->save();

        return redirect()->route('pembelian.index')->with('success', 'Pembelian berhasil dibuat');
    }
}