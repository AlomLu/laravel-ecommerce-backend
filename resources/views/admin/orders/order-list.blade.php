@extends('admin.layout.MasterApp')
@section("content")
    <!-- Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>Order List</h5>
                            <a href="#" class="btn btn-solid">Download all orders</a>
                        </div>
                        <div>
                            <div class="table-responsive">
                                <table class="table all-package order-table theme-table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Order Image</th>
                                            <th>Order Code</th>
                                            <th>Date</th>
                                            <th>Payment Method</th>
                                            <th>Delivery Status</th>
                                            <th>Amount</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr data-bs-toggle="offcanvas" href="#order-details">
                                            <td>
                                                <a class="d-block">
                                                    <span class="order-image">
                                                        <img src="assets/images/product/1.png"
                                                            class="img-fluid" alt="users">
                                                    </span>
                                                </a>
                                            </td>

                                            <td> 406-4883635</td>

                                            <td>Jul 20, 2022</td>

                                            <td>Paypal</td>

                                            <td class="order-success">
                                                <span>Success</span>
                                            </td>

                                            <td>$15</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

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
                                                    <li>
                                                        <a class="btn btn-sm btn-solid text-white"
                                                            href="order-tracking.html">
                                                            Tracking
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
                </div>
            </div>
        </div>
    </div>
<!-- Table End -->
@endsection