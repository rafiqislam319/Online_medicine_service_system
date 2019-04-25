@extends('front-end.master')
@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-12 well text-center text-success">
                Dear {{Session::get('customerName')}}. You have to give us product payment method
            </div>

        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2 well">

                {{ Form::open(['route'=>'new-order', 'method'=>'POST']) }}
                    <table class="table table-bordered">
                        <tr>
                            <th>Cash On Delivery</th>
                            <th><input type="radio" name="payment_type" value="Cash"> Cash On Delivery</th>
                        </tr>
                        <tr>
                            <th>Paypal</th>
                            <th><input type="radio" name="payment_type" value="Bkash"> Bkash</th>
                        </tr>
                        <tr>
                            <th>Bkash</th>
                            <th><input type="radio" name="payment_type" value="Paypal"> Paypal</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th><input type="submit" name="btn" value="confirm order"></th>
                        </tr>
                    </table>
                {{ Form::close() }}

            </div>
        </div>
    </div>
@endsection