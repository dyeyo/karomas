<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductosController extends Controller
{
  public function index()
  {
    $categories = Categories::all();
    $products = Products::all();
    return view('products.index', compact('products', 'categories'));
  }


  public function store(Request $request)
  {
    $product = new Products($request->all());
    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $name1 = $file->getClientOriginalName();
      $file->move(public_path() . '/img/products/', $name1);
      $product->image = $name1;
    }
    $product->save();
    Session::flash('message', 'Producto creado con exito');
    return redirect()->route('products');
  }

  public function edit(Request $request, $id)
  {
    $product = Products::with('categories')->find($id);
    $categories = Categories::all();
    return view('products.edit', compact('product', 'categories'));
  }

  public function update(Request $request, $id)
  {
    $product = Products::find($id);
    $product->update($request->all());
    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $name1 = $file->getClientOriginalName();
      $file->move(public_path() . '/img/products/', $name1);
      $product->image = $name1;
    }
    $product->update();
    Session::flash('message', 'Producto editado con exito');
    return redirect()->route('products');
  }

  public function destroy($id)
  {
    Products::find($id)->delete();
    Session::flash('message', 'Producto eliminado con exito');
    return redirect()->route('products');
  }
}
