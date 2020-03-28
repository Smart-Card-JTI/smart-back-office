@extends('layouts.baseadmin')
@section('contentadmin')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h4 class="header-title m-t-0 m-b-20">Create New User</h4>
                                </div>
                            </div>
                            <form class="form-horizontal" method="POST" action="create_user">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">
                                            <label for="nama">Nama</label>
                                            <input class="form-control" type="text" name="nama" id="nama" required="" placeholder="Nama">
                                            @error('nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">
                                            <label for="username">Username</label>
                                            <input class="form-control" type="text" name="username" id="username" required="" placeholder="Username">
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">
                                            <label for="email">Email</label>
                                            <input class="form-control" type="email" id="email" name="email" required="" placeholder="user@gmail.com">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group m-b-20">
                                        <div class="col-xs-12">
                                            <label for="password">Password</label>
                                            <input class="form-control" type="password" name="password" required="" id="password" placeholder="Enter your password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <!--end row -->
                            <div class="form-group text-right">
                                <button class="btn btn-primary waves-effect waves-light" type="submit">
                                    Submit
                                </button>
                            </div>
                            </form>
    
                        </div> <!-- container -->
    
    
                        <div class="footer">
                            <div class="pull-right hide-phone">
                                Project Completed <strong class="text-custom">57%</strong>.
                            </div>
                            <div>
                                <strong>Simple Admin</strong> - Copyright © 2017 - 2018
                            </div>
                        </div>
    
                    </div> <!-- content -->
    
                </div>
    
    
                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->
@endsection