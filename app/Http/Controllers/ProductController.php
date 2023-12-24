<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('Product.index')->with('products', $products);
    }
    // public function productdetail(Request $request)
    // {

    //     $productId = $request->input('mh');
    //     $product = Product::where('id', $productId)->first();
    //     return view('ProductDetail.index')->with('products1', $product);
    // }
    public function productdetail($id)
    {
        $product = Product::find($id);
        return view('ProductDetail.index')->with('products1', $product);
    }


    public function home()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('Home.index', compact('products', 'categories'));
        //return view('Home.index', ['products' => $products, 'categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Category::all();
        return view("Product.create", ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product([
            'name' => $request->input('productName'),
            'description' => $request->input('productDescription'),
            'price' => $request->input('productPrice'),
            'quantity' => $request->input('productCount'),
            'origin' => $request->input('productOrigin'),
            'category_id' => $request->input('productCategory')
        ]);
        $product->id_product = 'SP' . str_pad(Product::count() + 1, 4, '0', STR_PAD_LEFT);
        if($request->productImage!=null){
            $generatedImageName = 'image' . time() . '-'
            . $product->id_product . '.'
            . $request->productImage->extension();
        $request->productImage->move(public_path('images'), $generatedImageName);
        $product->img = $generatedImageName;
        }
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $product = Product::find($id);
        return view('product.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view("product.edit", [
            'categories' => $categories,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Product::find($id);
        if($request->productImage!=null){
            $generatedImageName = 'image' . time() . '-'
            . $product->id_product . '.'
            . $request->productImage->extension();
        $request->productImage->move(public_path('images'), $generatedImageName);
        $product->update([
            'img'=>$generatedImageName
        ]);
        }

        $product->update([
            'name' => $request->input('productName'),
            'description' => $request->input('productDescription'),
            'price' => $request->input('productPrice'),
            'quantity' => $request->input('productCount'),
            'origin' => $request->input('productOrigin'),
        ]);
        // dd($product);
        // $product = Product::where('id', $id)
        //     ->update([
        //         'name' => $request->input('productName'),
        //         'description' => $request->input('productDescription'),
        //         'price' => $request->input('productPrice'),
        //         'quantity' => $request->input('productCount'),
        //         'origin' => $request->input('productOrigin')
        //     ]);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $product = Product::find($id);
        $product->delete();

        return redirect()->route("product.index");
    }
}
