<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewOrders;
use App\Models\InvoiceDetail;
use App\Models\Invoice;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=ViewOrders::all();
        // dd($orders);
        return view("Order.show",['orders'=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $invoices_detail=InvoiceDetail::find($id)->update([
            "is_purchased"=>"1"
        ]);
        return redirect()->route("Orders.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
