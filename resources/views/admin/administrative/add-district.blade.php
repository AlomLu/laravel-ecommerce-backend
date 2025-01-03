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
                                    <h5>Add District</h5>
                                    @if(session('success'))
                                    <span>{{session('success')}}</span>
                                    @endif
                                </div>

                                <form action="{{route('add.district')}}" method="POST" class="theme-form theme-form-2 mega-form" id="">
                                    @csrf
                                    <div class="successMsg">

                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">District Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="dis_name" id="dis_name" type="text"
                                                placeholder="District name">
                                                <span class="text-danger dis_name_err"></span>
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">District Name</label>
                                        <div class="col-sm-9">
                                            <select name="division_id" id="">
                                                <option value="">Select division</option>
                                                @foreach ($divisions as $division)
                                                    <option value="{{$division->id}}">{{$division->div_name}}</option>
                                                @endforeach
                                            </select>
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
<!-- New Product Add End -->
 @endsection