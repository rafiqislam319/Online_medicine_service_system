@extends('admin.master')
@section('body')

    <br/>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                </div>
                <div class="panel-body">
                    <h3 class="text-center text-success">Customer For This Order</h3>
                    <table class="table table-bordered">
                        <tr>
                            <th>Customer Name</th>
                            <td>{{ $customer->first_name.' '.$customer->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $customer->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Email Address</th>
                            <td>{{ $customer->email_address }}</td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td>{{ $customer->address }}</td>
                        </tr>

                    </table>

                </div>

            </div>

        </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

            </div>
            <div class="panel-body">
                <h3 class="text-center text-success">Order Details info for This Order</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>Order No</th>
                        <td>{{ $order->id }}</td>
                    </tr>
                    <tr>
                        <th>Order Total</th>
                        <td>{{ $order->order_total }}</td>
                    </tr>
                    <tr>
                        <th>Order status</th>
                        <td>{{ $order->order_status }}</td>
                    </tr>
                    <tr>
                        <th>Order Date</th>
                        <td>{{ $order->created_at }}</td>
                    </tr>

                </table>

            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

            </div>
            <div class="panel-body">
                <h3 class="text-center text-success">Shipping info For This Order</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>Full Name</th>
                        <td>{{ $shipping->full_name }}</td>
                    </tr>
                    <tr>
                        <th>Phone Number</th>
                        <td>{{ $shipping->phone_number }}</td>
                    </tr>
                    <tr>
                        <th>Email Address</th>
                        <td>{{ $shipping->email_address }}</td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td>{{ $shipping->address }}</td>
                    </tr>

                </table>

            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

            </div>
            <div class="panel-body">
                <h3 class="text-center text-success">Payment info For This Order</h3>
                <table class="table table-bordered">
                    <tr>
                        <th>Payment Type</th>
                        <td>{{ $payment->payment_type }}</td>
                    </tr>
                    <tr>
                        <th>Payment status</th>
                        <td>{{ $payment->payment_status }}</td>
                    </tr>


                </table>

            </div>

        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success" id="xyz">Product Info For this Order</h3>
                    <table class="table table-bordered">
                        <tr class="bg-primary">
                            <th>SI. NO</th>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product quantity</th>
                            <th>Total price</th>

                        </tr>
                        @php(($i=1))

                        @foreach($orderDetails as $orderDetail )
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $orderDetail->product_id }}</td>
                                <td>{{ $orderDetail->product_name }}</td>
                                <td>{{ $orderDetail->product_price }}</td>
                                <td>{{ $orderDetail->product_quantity }}</td>
                                <td>TK. {{ $orderDetail->product_price*$orderDetail->product_quantity }}</td>


                            </tr>
                                @endforeach


                    </table>

                </div>

            </div>

        </div>
    </div>


@endsection