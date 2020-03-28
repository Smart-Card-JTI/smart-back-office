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
                                    <h4 class="header-title m-t-0 m-b-20">Daftar Admin</h4>
                                </div>
                            </div>
                            <a type="button" class="btn btn-primary" href="{{url('admin/create_user')}}"><i class="mdi mdi-plus"></i></a>
                            {{-- <button class=""><i class="mdi mdi-plus"></i></button> --}}
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
    
                                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nama</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th><i class="mdi mdi-settings"></i>Action</th>

                                            </tr>
                                            </thead>
    
    
                                            <tbody>
                                            @php
                                            $i=1;    
                                            @endphp
                                            @foreach ($users as $item)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$item->nama}}</td>
                                                    <td>{{$item->username}}</td>
                                                    <td>{{$item->email}}</td>
                                                    @if($item->status==0)
                                                    <td>Tidak Aktif</td>
                                                    @else
                                                    <td>Aktif</td>
                                                    @endif
                                                    <td>
                                                        <div class="row">
                                                            <a class="btn btn-icon btn-warning" href="{{URL::to('admin/edit_user/'.$item->id.'')}}">
                                                                <i class="fa fa-wrench"></i>
                                                            </a>
                                                            <a class="btn btn-icon btn-danger" href="delete_user/{{$item->id}}}}">
                                                                <i class="fa fa-remove"></i>
                                                            </a>
                                                        </div>
                                                        </td>
                                                    {{-- <td><a href="admin/edit_user/{{$item->id}}"><span></span> Edit</a>
                                                        <a href="admin/delete_user/{{$item->id}}"><span></span> Delete</a>
                                                    </td> --}}
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
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
