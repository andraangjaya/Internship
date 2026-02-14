<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\OrderService;
use Illuminate\Routing\Controller;

class UserController extends Controller
{

    protected OrderService $orderService;


    public function __construct(OrderService $orderService){
        $this->orderService = $orderService;
    }

    public function show(){
        return $this->orderService->notify();
    }

    public function notify(OrderService $orderService){
        return $orderService->notify();
    }

}
