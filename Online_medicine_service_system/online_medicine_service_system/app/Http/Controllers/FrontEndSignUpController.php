<?php

namespace App\Http\Controllers;

use App\Customer;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use Session;

class FrontEndSignUpController extends Controller
{
    public function index(){
        return view('front-end.user.sign-up');

    }
    public function customerSignUp(Request $request){

        $this->validate($request, [
            'email_address' => 'email|unique:customers,email_address'

        ]);


        $newCustomer = new Customer();
        $newCustomer->first_name = $request->first_name;
        $newCustomer->last_name = $request->last_name;
        $newCustomer->email_address = $request->email_address;
        $newCustomer->password = bcrypt($request->password);
        $newCustomer->phone_number = $request->phone_number;
        $newCustomer->address = $request->address;
        $newCustomer->save();

        $newCustomerId = $newCustomer->id;
        Session::put('newCustomerId',$newCustomerId);// Note: this id doesn't use this id & name will come from checkoutController session
        Session::put('newCustomerName',$newCustomer->first_name.' '.$newCustomer->last_name);
        return redirect('/shipping');

    }

    public function customerLogout(){
        Session::forget('customerId'); // Note: this id doesn't use this id & name will come from checkoutController session
        Session::forget('customerName');
        return redirect('/');
    }

    public function customerLoginShow(){
        return view('front-end.user.sign-in');

    }

    public function customerLogin(Request $request){
        $customer = Customer::where('email_address', $request->email_address)->first();


        if($customer){
            if (password_verify($request->password, $customer->password)) {

                Session::put('customerId',$customer->id);
                Session::put('customerName',$customer->first_name.' '.$customer->last_name);
                return redirect('/');


            } else {
                return redirect('/new-customer-login-page')->with('message','Invalid password');
            }
        }else{
            return redirect('/new-customer-login-page')->with('message','Invalid Email');
        }

    }
}
