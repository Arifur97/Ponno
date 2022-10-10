<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LogoutController extends Controller
{
    public function customerLogout() {
        Session::forget('customerId');
        Session::forget('customerName');
        Session::forget('shippingId');
        Session::forget('orderId');

        return redirect('/');
    }
}
