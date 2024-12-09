@extends('admin.layout.MasterApp')
@section("content")
<!-- All User Table Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>All District</h5>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{session('status')}}
                            </div>
                        @endif
                        <form class="d-inline-flex">
                            <a href="{{route('upazila')}}"
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
                                        <th>Upazila Name</th>
                                        <th>District Name</th>
                                        <th>Division Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($upazilas as $key => $upazila)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$upazila->upazila_name}}</td>
                                        <td>{{$upazila->district->dis_name}}</td>
                                        <td>{{$upazila->division->div_name}}</td>

                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{route('edit.upazila', $upazila->id)}}"
                                                    >
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <form action="{{route('delete.upazila', $upazila->id)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this upazila?')">
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