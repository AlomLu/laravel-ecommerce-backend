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
                                   
                                </div>

                                <form action="{{route('update.district')}}" method="POST" class="theme-form theme-form-2 mega-form" id="">
                                    @csrf
                                    <div class="successMsg">

                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">District Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="dis_name" id="dis_name" type="text"
                                                value="{{$district->dis_name}}">
                                                @if ($errors->has('dis_name'))
                                                    <span class="text-danger">{{$errors->first('dis_name')}}</span>
                                                @endif
                                                <span class="text-danger dis_name_err"></span>
                                            <input type="hidden" name="dis_id" value="{{$district->id}}">
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
                                            @if ($errors->has('division_id'))
                                                <span class="text-danger">{{$errors->first('division_id')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <input type="submit" class="btn btn-success"  value="Update">
                                    
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