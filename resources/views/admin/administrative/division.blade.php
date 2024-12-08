@extends('admin.layout.MasterApp')
    @section("content")
    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Add Division</h5>
                                        <div>
                                            <pre>{{ print_r(session()->all(), true) }}</pre>
                                        </div>

                                </div>

                                <form action="{{route('add.division')}}" method="POST" class="theme-form theme-form-2 mega-form" id="addDivision">
                                    @csrf
                                    <div class="successMsg">

                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Division Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="div_name" id="div_name" type="text"
                                                placeholder="Category Name">
                                                <span class="text-danger div_name_err"></span>
                                        </div>
                                    </div>
                                    <input type="button" class="btn btn-success ajax_add_division"  value="Submit">
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title d-sm-flex d-block">
                            <h5>Division List</h5>
                            @if(session('msg'))
                                    <div class="alert alert-success">
                                        <span>{{ session('msg') }}</span>
                                    </div>
                                @endif
                            
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table data_load all-package theme-table table-product autoLoad" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Serial No.</th>
                                            <th>Division name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ( $divisions as $key => $division )
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$division->div_name}}</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0)" 
                                                        class="update_form"
                                                            data-bs-toggle="modal" 
                                                            data-bs-target="#updateModal"
                                                            data-id="{{$division->id}}"
                                                            data-div_name = {{$division->div_name}}
                                                        >
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a  href="javascript:void(0)"
                                                            class="delete_division"
                                                            data-id="{{$division->id}}"
                                                            confirm()
                                                        >
                                                            <i class="ri-delete-bin-line "></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.administrative.js.division_js')
    @include('admin.administrative.modal.division_modal')
<!-- New Product Add End -->
 @endsection