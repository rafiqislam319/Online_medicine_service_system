@extends('front-end.master')
@section('body')
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Add To Cart</span></h3>
        </div>
    </div>
    <!--banner-->

    <!--content-->
    <div class="content">
        <!--single-->
        <div class="single-wl3">
            <div class="container">

                <!--Product Description-->

                <div class="row">
                    <div class="col-md-5 well">
                        <h3 class="text-center text-success">Register if you are not Registered before!!!</h3>
                    </br>
                        {{ Form::open(['route'=>'customer-sign-up', 'method'=>'POST']) }}
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" placeholder="First_Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="last_name" class="form-control" placeholder="Last_Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email_address" class="form-control" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone_number" class="form-control" placeholder="phone_number">
                        </div>
                        <div class="form-group">
                            <textarea name="address" placeholder="Address" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class="form-control btn btn-info" value="Register">
                        </div>
                        {{ Form::close() }}
                </div>
                    <div class="col-md-5 well" style="margin-left: 20px;">
                        <h3 class="text-center text-success">Already Registered? Login Here</h3>
                        <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                        <br/>
                        {{ Form::open(['route'=>'customer-login', 'method'=>'POST'])}}
                        <div class="form-group">
                            <input type="email" name="email_address" class="form-control" placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class="form-control btn btn-success" value="Log-in">
                        </div>
                        {{Form::close()}}
                    </div>
                </div>
                <!--Product Description-->
            </div>
        </div>
        <!--single-->

        <!--new-arrivals-->
    </div>
@endsection