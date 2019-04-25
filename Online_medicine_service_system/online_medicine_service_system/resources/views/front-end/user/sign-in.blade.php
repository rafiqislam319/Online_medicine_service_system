@extends('front-end.master')
@section('body')
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Sign In</span></h3>
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
                    <div class="col-md-4 col-md-offset-4 well">
                        <h3 class="text-center text-success">Login Here</h3>
                        <h4 class="text-center text-danger">{{Session::get('message')}}</h4>
                        <br/>
                        {{ Form::open(['route'=>'new-customer-login', 'method'=>'POST'])}}
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