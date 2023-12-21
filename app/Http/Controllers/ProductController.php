<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

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
        $generatedImageName = 'image' . time() . '-'
            . $product->id_product . '.'
            . $request->productImage->extension();
        $request->productImage->move(public_path('images'), $generatedImageName);

        $product->img = $generatedImageName;
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
<<<<<<< Updated upstream
        //
        $product = Product::find($id);
        return view('product.show',compact('product'));
=======
        $product=Product::find($id);
        return view('product.show')->with('product',$product);
>>>>>>> Stashed changes
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
        $generatedImageName = 'image' . time() . '-'
            . $product->id_product . '.'
            . $request->productImage->extension();
        $request->productImage->move(public_path('images'), $generatedImageName);
        $product->update([
            'name' => $request->input('productName'),
            'description' => $request->input('productDescription'),
            'price' => $request->input('productPrice'),
            'quantity' => $request->input('productCount'),
            'origin' => $request->input('productOrigin'),
            'img'=>$generatedImageName
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
