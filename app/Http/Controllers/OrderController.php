<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * @param Order $order
     * @return Collection
     */
    public function getService(Order $order)
    {
        return $order->service()->get();
    }

    public function getStageService(Order $order)
    {

    }
}
