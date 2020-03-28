@extends('layouts.baseadmin')
@section('contentadmin')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                    <!-- Start content -->
                    <div class="content">
                        <div class="container-fluid">                            
                                <div class="col-sm-12">
                                    <div class="card-box">
                                        <h6 class="m-t-0">Total Transaksi</h6>
                                        <div class="text-center">
                                            <ul class="list-inline chart-detail-list">
                                                <li class="list-inline-item">
                                                    <p class="font-normal"><i class="fa fa-circle m-r-10 text-primary"></i>Kartu</p>
                                                </li>
                                                <li class="list-inline-item">
                                                    <p class="font-normal"><i class="fa fa-circle m-r-10 text-muted"></i>Bulan</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div id="dashboard-bar-stacked" style="height: 300px;"></div>
                                    </div>
                                </div> <!-- end col -->
                         
    
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