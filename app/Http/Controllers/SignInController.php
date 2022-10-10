<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Customer;
use Session;

class SignInController extends Controller
{
    public function index() {
        $recentProducts = Product::orderBy('id', 'desc')->take(20)->get();
        return view('frontEnd.customer.sing-in-register',[
            'recentProducts' => $recentProducts
        ]);
    }
    public function customerLoginCheck(Request $request) {
        $this->validate($request,array(
            'email_address'=>'required',
            'password'=>'required'
        ));

        $customerInfo = Customer::where('email_address', $request->email_address)->first();
        if($customerInfo) {
            $existingPassword = $customerInfo->password;
            if (password_verify($request->password, $existingPassword)) {
                Session::put('customerId', $customerInfo->id);
                Session::put('customerName', $customerInfo->first_name.' '.$customerInfo->last_name);

                return redirect('/customer-home');
            } else {
                return redirect('/sign-in')->with('message', 'Please use valid password');
            }
        } else {
            return redirect('/sign-in')->with('message', 'Please use valid email address');
        }
    }
    public function customerRegistration() {
        $recentProducts = Product::orderBy('id', 'desc')->take(20)->get();
        return view('frontEnd.customer.register-sing-in',[
            'recentProducts' => $recentProducts
        ]);
    }
    public function newCustomer(Request $request) {
        $this->validate($request, array(
            'first_name'=>'required|max:20|min:5|regex:/^[\pL\s\-]+$/u',
            'last_name'=>'required|max:20|min:5|regex:/^[\pL\s\-]+$/u',
            'email_address'=>'required|email|unique:customers,email_address',
            'password'=>'required|max:10|min:6',
            'mobile_number'=>'required|size:11|regex:/(01)[0-9]{9}/',
        ));

        if($customerImage = $request->file('customer_image')) {
            $customerImageName = $customerImage->getClientOriginalName();
            $uploadPath = 'customer_image/';
            $imageUrl1 = $uploadPath . $customerImageName;
            $customerImage->move($uploadPath, $customerImageName);
        }
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email_address = $request->email_address;
        $customer->password = bcrypt($request->password);
        $customer->mobile_number = $request->mobile_number;
        $customer->date_of_birth = $request->date_of_birth;
        if(isset($imageUrl1)) {
        $customer->customer_image=$imageUrl1;
        }
        $customer->address = $request->address;
        $customer->national_id = $request->national_id;
        $customer->district_name = $request->district_name;
        $customer->country_name = $request->country_name;
        $customer->save();
        Session::put('customerId', $customer->id);
        Session::put('customerName', $request->first_name.' '.$request->last_name);
        return redirect('/customer-home');
    }

    public function editCustomer($id){
            $signInById = Customer::find($id);
            return view('frontEnd.customer.edit-customer', ['signIn' => $signInById]);

    }
    public function updateCustomer(Request$request){
        $customerImage = $request->file('customer_image');
        if($customerImage){
            $customerImageName = $customerImage->getClientOriginalName();
            $uploadPath = 'customer_image/';
            $imageUrl1 = $uploadPath . $customerImageName;
            $customerImage->move($uploadPath, $customerImageName);
            $this->updateWithImage($request,$imageUrl1);
            return redirect('/customer-home')->with('message','Customer Info Update Successful');
        }else{
            $this->updateWithOutImage($request);
            return redirect('/customer-home')->with('message','Customer Info Update Successful');
        }
    }
    public function updateWithOutImage($request){
        $this->validate($request, array(
            'first_name'=>'required|max:20|min:5',
            'last_name'=>'required|max:20|min:5',
            'email_address'=>'required',
            'password'=>'required|max:10|min:6',
            'mobile_number'=>'required|max:16',
        ));
        $customerId=$request->customerId;
        $customer = Customer::find($customerId);
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email_address = $request->email_address;
        $customer->password = bcrypt($request->password);
        $customer->mobile_number = $request->mobile_number;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->address = $request->address;
        $customer->national_id = $request->national_id;
        $customer->district_name = $request->district_name;
        $customer->country_name = $request->country_name;
        $customer->save();
        Session::put('customerId', $customer->id);
        Session::put('customerName', $request->first_name.' '.$request->last_name);
//        return redirect('customer-home');
    }
    public function updateWithImage($request,$imageUrl1){
        $customerId=$request->customerId;
        $customer = Customer::find($customerId);
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email_address = $request->email_address;
        $customer->password = bcrypt($request->password);
        $customer->mobile_number = $request->mobile_number;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->customer_image=$imageUrl1;
        $customer->address = $request->address;
        $customer->national_id = $request->national_id;
        $customer->district_name = $request->district_name;
        $customer->country_name = $request->country_name;
        $customer->save();
        Session::put('customerId', $customer->id);
        Session::put('customerName', $request->first_name.' '.$request->last_name);
    }
}
