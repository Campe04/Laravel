<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProduct(){
        $nombre = "Monitor Acer";
        $precio = 176.99;
        $stock = 4;
        $descripcion = "Monitor Acer 144hz";
        $p = new Product();

        $p->nombre = $nombre;
        $p->precio = $precio;
        $p->stock = $stock;
        $p->descripcion = $descripcion;

        $p->save();
    }

    public function getProducts(){
        $productos = Product::all();
        $data['products'] = $productos;
        return view('list-products', $data);
    }

    public function getProduct($id){
        $producto = Product::where('id',$id)->get();
        $data['product'] = $producto;
        return view('list-products',$data);
    }
}
