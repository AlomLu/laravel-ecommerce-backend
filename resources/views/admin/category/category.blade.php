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
                                    <h5>Add Category</h5>
                                </div>

                                <form action="{{route('add.category')}}" method="POST" class="theme-form theme-form-2 mega-form">
                                    @csrf
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                        <div class="col-sm-9">
                                            <input name="cat_name" class="form-control" type="text"
                                                placeholder="Category Name">
                                                <div class="text-danger">
                                                    @if ($errors->has('cat_name'))
                                                        {{$errors->first('cat_name')}}
                                                    @endif
                                                </div>
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