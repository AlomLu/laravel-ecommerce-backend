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
                                    <h5>Add Sub Category</h5>
                                </div>

                                <form action="{{route('update.sub-category')}}" method="POST" class="theme-form theme-form-2 mega-form">
                                    @csrf
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                        <div class="col-sm-9">
                                            <select name="category_id" id="">
                                                <option value="">Select category</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="text-danger">
                                                @if ($errors->has('category_id'))
                                                    {{$errors->first('category_id')}}
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Sub Category Name</label>
                                        <div class="col-sm-9">
                                            <input name="subcat_name" value="{{$subCategory->subcat_name}}" class="form-control" type="text"
                                                placeholder="Sub Category Name">
                                                
                                            <div class="text-danger">
                                                @if ($errors->has('subcat_name'))
                                                    {{$errors->first('subcat_name')}}
                                                @endif
                                            </div>
                                            <input type="hidden" name="subcat_id" value="{{$subCategory->id}}">
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