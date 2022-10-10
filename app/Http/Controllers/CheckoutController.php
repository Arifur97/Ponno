<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Shipping;
use Illuminate\Http\Request;
use Mail;
use Session;
use App\Order;
use App\Payment;
use App\OrderDetail;
use Cart;
use DB;
use App\Product;
use App\NowOrder;

class CheckoutController extends Controller
{

    public function index() {
        $recentProducts = Product::orderBy('id', 'desc')->take(20)->get();
        return view('frontEnd.checkout.checkout', [
            'recentProducts' => $recentProducts
        ]);
    }

    public function uploadCustomerImage($request) {
        $customerImage = $request->file('customer_image');
        $customerImageName = $customerImage->getClientOriginalName();
        $uploadPath = 'customer_image/';
        $imageUrl1 = $uploadPath . $customerImageName;
        $customerImage->move($uploadPath, $customerImageName);
        return $imageUrl1;
    }

    public function saveCustomerInfo(Request $request) {
        $this->validate($request, array(
            'first_name'=>'required|regex:/^[\pL\s\-]+$/u|max:30|',
            'last_name'=>'required|regex:/^[\pL\s\-]+$/u|max:30',
            'email_address'=>'required|email|unique:customers,email_address',
            'password'=>'required|max:10|min:6',
            'mobile_number'=>'required|size:11|regex:/(01)[0-9]{9}/',
        ));

        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email_address = $request->email_address;
        $customer->password = bcrypt($request->password);
        $customer->mobile_number = $request->mobile_number;
        $customer->date_of_birth = $request->date_of_birth;
        if($request->file('customer_image'))  {
        $customer->customer_image = $this->uploadCustomerImage($request);
        }
        $customer->address = $request->address;
        $customer->national_id = $request->national_id;
        $customer->district_name = $request->district_name;
        $customer->country_name = $request->country_name;
        $customer->save();
        Session::put('customerId', $customer->id);
        Session::put('customerName', $request->first_name.' '.$request->last_name);

        $data = $customer->toArray();
        Mail::send('frontEnd.mails.congratulation-mail', $data, function ($message) use ($data)  {
            $message->to($data['email_address']);
            $message->subject('Welcome Message');
        });

        return redirect('/shipping-info');
    }

    public function showShippingInfo() {
        $customerId = Session::get('customerId');
        $customerById = Customer::where('id', $customerId)->first();
        $recentProducts = Product::orderBy('id', 'desc')->take(20)->get();
        return view('frontEnd.shipping.shipping', [
            'customerById'=>$customerById,
            'recentProducts' => $recentProducts
        ]);
    }

    public function saveShippingInfo(Request $request) {
        $this->validate($request, array(
            'full_name'=>'required|max:20|min:5',
            'mobile_number'=>'required|size:11|regex:/(01)[0-9]{9}/',
            'address'=>'required'
        ));

        $shipping = new Shipping();
        $shipping->full_name = $request->full_name;
        $shipping->mobile_number= $request->mobile_number	;
        $shipping->address = $request->address;
        $shipping->save();
        Session::put('shippingId', $shipping->id);
        return redirect('/payment-info');
    }

    public function showPaymentInfo() {
        $recentProducts = Product::orderBy('id', 'desc')->take(20)->get();
        return view('frontEnd.payment.payment', [
            'recentProducts' => $recentProducts
        ]);
    }

    private function orderByPcash($payment_type) {
        $this->saveOrderInfo();
        $this->savePaymentInfo($payment_type);
        $this->saveOrderDetailInfo();
    }

    private function saveOrderInfo() {
        $order = new Order();
        $order->customer_id = Session::get('customerId');
        $order->shipping_id = Session::get('shippingId');
        $order->order_total = Session::get('order_total');
        $order->save();
        Session::put('orderId', $order->id);
    }

    private function savePaymentInfo($payment_type) {
        $payment = new Payment();
        $payment->order_id = Session::get('orderId');
        $payment->payment_type = $payment_type;
        $payment->save();
    }

    private function saveOrderDetailInfo() {
        $cartProducts = Cart::content();
        foreach ($cartProducts as $cart_product) {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = Session::get('orderId');
            $orderDetail->product_id = $cart_product->id;
            $orderDetail->product_name = $cart_product->name;
            $orderDetail->product_code = $cart_product->options->code;
            $orderDetail->image = $cart_product->options->image;
            $orderDetail->size_width = $cart_product->options->size_width;
            $orderDetail->product_price = $cart_product->price;
            $orderDetail->product_quantity = $cart_product->qty;
            $orderDetail->save();
        }
    }
    public function newOrderInfo(Request $request) {
        $payment_type = $request->payment_type;
        switch ($payment_type) {
            case 'Cash On Delivery':
                $this->orderByPcash($payment_type);
                break;
            case 'Rocket':
                $this->orderByPcash($payment_type);
                break;
            case 'B-Kash':
                $this->orderByPcash($payment_type);
                break;
            case 'Visa Card':
                $this->orderByPcash($payment_type);
                break;
            case 'Master Card':
                $this->orderByPcash($payment_type);
                break;
            case 'Nexus Card':
                $this->orderByPcash($payment_type);
                break;
            case 'American Express Card':
                $this->orderByPcash($payment_type);
                break;
        }
        return redirect('/complete-order');
    }
    public function completeOrderInfo() {
        $firstTopProducts = DB::table('products')->where('top_product_status', 1)->orderBy('id', 'desc')->skip(0)->take(4)->get();
        $secondTopProducts = DB::table('products')->where('top_product_status', 1)->orderBy('id', 'desc')->skip(4)->take(4)->get();
        $thirdTopProducts = DB::table('products')->where('top_product_status', 1)->orderBy('id', 'desc')->skip(8)->take(4)->get();
        $fourthTopProducts = DB::table('products')->where('top_product_status', 1)->orderBy('id', 'desc')->skip(12)->take(4)->get();

        return view('frontEnd.order.complete-order',[
            'firstTopProducts'=>$firstTopProducts,
            'secondTopProducts'=>$secondTopProducts,
            'thirdTopProducts'=>$thirdTopProducts,
            'fourthTopProducts'=>$fourthTopProducts
        ]);
    }

    public function customerEmailCheck($email) {
        $customerByEmail = Customer::where('email_address', $email)->first();
        if($customerByEmail) {
            echo 'Email Address Already Exist';
        } else {
            echo "Email Address Available ";
        }
    }

    public function orderNow($id){
        $productById=Product::find($id);
        return view('frontEnd.product.order-now',['productById'=>$productById]);
    }


    public function saveOrder(Request $request){
        $this->validate($request, [
            'billing_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'billing_email' => 'required|email',
            'billing_mobile' => 'required|size:11|regex:/(01)[5-9]{9}/',
            'billing_address' => 'required',

            'sipping_name' => 'required|regex:/^[\pL\s\-]+$/u',
            'sipping_email' => 'required|email',
            'sipping_mobile' => 'required|size:11|regex:/(01)[5-9]{9}/',
            'sipping_address' => 'required',
        ]);

        $nowOrder=new NowOrder();
        $nowOrder->product_id=$request->product_id;
        $nowOrder->product_name=$request->product_name;
        $nowOrder->product_quantity=$request->product_quantity;
        $nowOrder->billing_name=$request->billing_name;
        $nowOrder->billing_email=$request->billing_email;
        $nowOrder->billing_mobile=$request->billing_mobile;
        $nowOrder->billing_address=$request->billing_address;
        $nowOrder->sipping_name=$request->sipping_name;
        $nowOrder->sipping_email=$request->sipping_email;
        $nowOrder->sipping_mobile=$request->sipping_mobile;
        $nowOrder->sipping_address=$request->sipping_address;
        $nowOrder->payment_method=$request->payment_method;
        $nowOrder->save();
        return redirect('/complete-order');
    }



}
