@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <div class="wrapper-page">

                <div class="m-t-40 card-box">
                    <div class="text-center">
                        <h2 class="text-uppercase m-t-0 m-b-30">
                            <a href="index.html" class="text-success">
                                <span><img src="{{asset('polinema.ico')}}" alt="" height="80"></span>
                            </a>
                        </h2>
                        <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                    </div>
                    <div class="account-content">
                        <form class="form-horizontal" action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="form-group m-b-20">
                                <div class="col-xs-12">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" id="email" required autocomplete="email" placeholder="name@gmail.com" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group m-b-20">
                                <div class="col-xs-12">
                                    {{-- <a href="pages-forget-password.html" class="text-muted pull-right font-14">Forgot your password?</a> --}}
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" required="" name="password" id="password" placeholder="Enter your password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group account-btn text-center m-t-10">
                                <div class="col-xs-12">
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
                                </div>
         
                            </div>

                        </form>

                        <div class="clearfix"></div>

                    </div>
                </div>
                <!-- end card-box-->


                {{-- <div class="row m-t-50">
                    <div class="col-sm-12 text-center">
                        <p class="text-muted">Don't have an account? <a href="{{route('register')}}" class="text-dark m-l-5">Sign Up</a></p>
                    </div>
                </div> --}}

            </div>
            <!-- end wrapper -->

        </div>
    </div>
</div>
@endsection