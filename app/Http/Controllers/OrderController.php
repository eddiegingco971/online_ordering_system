<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $orders = Order::where('payment_status', 2)
        // ->where('status', [1,2])
        // ->get();
        // dd($orders);
        $orderItems = OrderItems::whereHas('orders', function ($q){
            $q->where('payment_status', '!=', 1);
            // $q->where('status', '!=', 3);
        })->get();
        // dd($orderItems);
        $categories = Category::where('created_at', '!=', null)->get();
        return view('admin.order.index', compact('categories', 'orderItems'));
    }

    public function orderDelivered()
    {
        $orders = Order::where('status', 'delivered')->where('payment_status', 'paid')->get();
        $orderItems = OrderItems::get();
        $categories = Category::where('created_at', '!=', null)->get();
        return view('admin.order.delivered', compact('orders', 'categories','orderItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $orders = Order::find($id);
        return view('admin.fee.edit', compact('orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($tracking_number)
    {
        // $tracking_number
        // $orderItems = OrderItems::find($id);
        // $orders = Order::where('tracking_number', $tracking_number)->get();
        // dd($orders);
        // $users = User::get();
        return view('admin.order.edit', compact('tracking_number'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $orders = Order::find($id);
    //     $orders->delete();
    //     return redirect('/order')->with('status', 'Product Deleted Successfully!');
    // }
}
