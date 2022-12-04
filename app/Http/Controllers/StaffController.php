<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $orders = Order::get();
        $orderItems = OrderItems::whereHas('orders', function ($q){
            $q->where('payment_status', '!=', 1);
            // $q->where('status', '!=', 3);
        })->get();
        // dd($orderItems);
        $categories = Category::where('created_at', '!=', null)->get();
        return view('staff.index', compact('categories', 'orderItems'));
    }

    public function orderDelivered()
    {
        $orders = Order::where('status', 'delivered')->where('payment_status', 'paid')->get();
        $orderItems = OrderItems::get();
        $categories = Category::where('created_at', '!=', null)->get();
        return view('staff.delivered', compact('orders', 'categories', 'orderItems'));
    }
    public function show($tracking_number){

        // $orders= Order::where('user_id', auth()->user()->id)->first();
        $orders = Order::where('tracking_number', $tracking_number)->get();

        return view('staff.viewOrder', compact('orders'));
    }

    public function edit($tracking_number)
    {
        // $tracking_number
        // $orderItems = OrderItems::find($id);
        // $orders = Order::where('tracking_number', $tracking_number)->get();
        // dd($orders);
        // $users = User::get();
        return view('staff.edit', compact('tracking_number'));
    }
}
