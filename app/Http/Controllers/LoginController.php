<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Customer;
use Session;

class LoginController extends Controller
{
    public function customerLogin(Request $request) {
        $customerInfo = Customer::where('email_address', $request->email_address)->first();
        if($customerInfo) {
            $existingPassword = $customerInfo->password;
            if (password_verify($request->password, $existingPassword)) {
                Session::put('customerId', $customerInfo->id);
                Session::put('customerName', $customerInfo->first_name.' '.$customerInfo->last_name);

                return redirect('/shipping-info');
            } else {
                return redirect('/checkout')->with('message', 'Please use valid password');
            }
        } else {
            return redirect('/checkout')->with('message', 'Please use valid email address');
        }
    }
}
