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
        $this->statuses = ['new', 'process','out_for_delivery', 'delivered'];
        $this->payment_statuses = ['paid', 'unpaid'];
        // $this->payment_status = $orders->payment_status;
        // $this->status = $orders->status;
    }

    public function updateOrder(){
        $this->orders = Order::where('tracking_number', $this->trackingId)->get();
        foreach($this->orders as $order){
            if($this->status != "delivered"){
                $order->update([
                    'status' => $this->status,
                ]);
            }else{
                $order->update([
                    'payment_status' => 'paid',
                    'status' => $this->status,
                ]);
            }
        }


        // foreach($this->orders as $order){
        //     if($this->payment_status == 'new'){
        //         $order->update([
        //             'status' => 'unpaid',
        //         ]);
        //     }elseif($this->payment_status == 'process'){
        //         $order->update([
        //             'status' => 'unpaid',
        //         ]);
        //     }elseif($this->payment_status == 'out_for_delivery'){
        //         $order->update([
        //             'status' => 'unpaid',
        //         ]);
        //     }else{
        //         $order->update([
        //             'status' => 'paid',
        //         ]);
        //     }
        // }
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
