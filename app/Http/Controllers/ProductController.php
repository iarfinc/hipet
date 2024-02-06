<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
 
class ProductController extends Controller
{
    public function index()
    {
        $product = Product::orderBy('created_at', 'ASC')->get();
  
        return view('products.index', compact('product'));
    }
  
    public function create()
    {
        return view('products.create');
    }
  
    public function store(Request $request)
    {
        Product::create($request->all());
 
        return redirect()->route('products')->with('success', 'Produk Berhasil Ditambahkan');
    }
  
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.show', compact('product'));
    }
  
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.edit', compact('product'));
    }
  
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'Produk Berhasil Diperbarui');
    }
  
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('deleted', 'Produk Berhasil Dihapus');
    }

    public function statistics()
    {
        $product = Product::all();
    
        return view('product.statistics', compact('product'));
    }

}