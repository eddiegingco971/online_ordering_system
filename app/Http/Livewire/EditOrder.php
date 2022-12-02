<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class EditOrder extends Component
{
    public $orders, $trackingId, $tracking_number, $payment_status, $status, $statuses, $payment_statuses;

    public function mount(){
        $this->orders = Order::where('tracking_number', $this->trackingId)->first();
        $this->payment_status = $this->orders->payment_status;
        $this->status = $this->orders->status;
        $this->statuses = ['new', 'process', 'delivered'];
        $this->payment_statuses = ['paid', 'unpaid'];
        // $this->payment_status = $orders->payment_status;
        // $this->status = $orders->status;
    }

    public function updateOrder(){
        $this->orders = Order::where('tracking_number', $this->trackingId)->get();
        foreach($this->orders as $order){
            $order->update([
                'status' => $this->status,
                'payment_status' => $this->payment_status
            ]);
        }

        return redirect('/order');

    }

    // public function loadOrder(){
    //     // dd($this->trackingId);
    //     // $orders = Order::where('tracking_number', $this->trackingId)->first();
    //     // $orders = Order::find($this->trackingId);
    //     // $orders = Order::find($this->trackingId);
    //     // dd($orders);
    //     // return Order::find($this->trackingId);
    //     // return compact('orders');
    // }



    // public function mount(){
    //     $orders = Order::where('tracking_number', $this->tracking_number)->first();
    //     dd($orders);
    //     // $this->payment_status => '';
    //     // $this->status => '';
    // }


    public function render()
    {
        // $orders = Order::get();
        return view('livewire.edit-order');
    }
}
