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
                                    <h5>Add Upazila</h5>
                                </div>

                                <form action="{{route('update.upazila')}}" method="POST" class="theme-form theme-form-2 mega-form" id="">
                                    @csrf
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Division Name</label>
                                        <div class="col-sm-9">
                                            <select name="division_id" id="division_id">
                                                <option value="">Select division</option>
                                                @foreach ($divisions as $division)
                                                    <option value="{{$division->id}}">{{$division->div_name}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('division_id'))
                                                <span class="text-danger">{{$errors->first('division_id')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">District Name</label>
                                        <div class="col-sm-9">
                                            <select name="district_id" id="distric_id">
                                                <option value="">Select district</option>
                                            </select>
                                            @if ($errors->has('district_id'))
                                                <span class="text-danger">{{$errors->first('district_id')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Upazila Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="upazila_name" id="upazila_name" type="text"
                                                value="{{$upazila->upazila_name}}">
                                                <input type="hidden" name="upazila_id" value="{{$upazila->id}}">
                                                @if($errors->has('upazila_name'))
                                                    <span class="text-danger">{{$errors->first('upazila_name')}}</span>
                                                @endif
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-success"  value="Submit">
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.administrative.js.upazila_js');
<!-- New Product Add End -->
 @endsection