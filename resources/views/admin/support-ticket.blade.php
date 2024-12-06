@extends('admin.layout.MasterApp')
@section("content")
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <!-- Table Start -->
                <div class="card-body">
                    <div class="title-header option-title">
                        <h5>Support Ticket</h5>
                    </div>
                    <div>
                        <div class="table-responsive">
                            <table class="table ticket-table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="check-box-contain">
                                                <span class="form-check user-checkbox checkall">
                                                    <input class="checkbox_animated" type="checkbox"
                                                        value="">
                                                </span>
                                                <span>Ticket Number</span>
                                            </div>
                                        </th>
                                        <th>
                                            <span>Date</span>
                                        </th>
                                        <th>
                                            <span>Subject</span>
                                        </th>
                                        <th>
                                            <span>Status</span>
                                        </th>
                                        <th>
                                            <span>Options</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="check-box-contain">
                                                <span class="form-check user-checkbox">
                                                    <input class="checkbox_animated check-it"
                                                        type="checkbox" value="">
                                                </span>
                                                <span>#453</span>
                                            </div>
                                        </td>
                                        <td>25-09-2021</td>

                                        <td>Query about return & exchange</td>

                                        <td class="status-danger">
                                            <span>Pending</span>
                                        </td>
                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#exampleModalToggle">
                                                        <i class="ri-delete-bin-line"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Table End -->
            </div>
        </div>
    </div>
</div>
@endsection