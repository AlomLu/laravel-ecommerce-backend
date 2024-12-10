@extends('admin.layout.MasterApp')
@section("content")
<!-- All User Table Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>All Category</h5>
                        <div class="alert alert-success">
                            @if (session('status'))
                                {{session('status')}}
                            @endif
                        </div>
                        <form class="d-inline-flex">
                            <a href="{{route('category')}}"
                                class="align-items-center btn btn-theme d-flex">
                                <i data-feather="plus-square"></i>Add New
                            </a>
                        </form>
                    </div>

                    <div class="table-responsive category-table">
                        <div>
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>Serial No.</th>
                                        <th>Category Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($categories as $key => $category)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$category->cat_name}}</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{route('edit.category', $category->id)}}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <form action="{{route('delete.category', $category->id)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button>
                                                            <i class="ri-delete-bin-line" style="color: red"></i>
                                                        </button>
                                                    </form>
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
<!-- All User Table Ends-->
@endsection