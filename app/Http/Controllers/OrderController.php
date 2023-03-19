<?php

namespace App\Http\Controllers;

use App\Event\OrderCreated;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(Request $request)
    {
        //order create function
        $order = new Order();
        //here you can fill order data from request


        event (new OrderCreated($order->id,"info@husam-hammad.com"));
        // Dispatch event
    }
}
