@extends('layout.app')
@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="page-titles">
            <ol class="breadcrumb">
                <li>
                    <h5 class="bc-title">Users</h5>
                </li>
                <li class="breadcrumb-item"><a href="{{ url('/') }}">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z"
                                stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item active"><a href="{{ url('/users') }}">Users</a></li>
            </ol>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 bst-seller">
                    <div class="d-flex align-items-center justify-content-between mb-4">

                        <div class="d-flex align-items-center">
                            <button type="button" class="btn btn-primary btn-sm me-2"><i
                                    class="fa-solid fa-filter me-2"></i>Filter
                            </button>


                        </div>
                    </div>



                    <div class="card h-auto">
                        <div class="card-body p-0">
                            <div class="table-responsive active-projects style-1 dt-filter exports">
                                <div class="tbl-caption">
                                </div>
                                <table id="customer-tbl" class="table table-striped table-responsive-sm">
                                    <thead>
                                        <tr>
                                            <th class="">
                                                <div class="form-check custom-checkbox ms-0">
                                                    <input type="checkbox" class="form-check-input" id="checkAll"
                                                        required="">
                                                    <label class="form-check-label" for="checkAll"></label>
                                                </div>
                                            </th>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Adress</th>
                                            <th>Phone Number</th>
                                            <th>Website</th>
                                            <th>Company</th>

                                            <th></th>
                                            {{-- <th>Location</th>
                                            <th>Status</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($responseData as $user)
                                            <tr>
                                                <td>
                                                    <div class="form-check custom-checkbox">
                                                        <input type="checkbox" class="form-check-input"
                                                            id="customCheckBox022" required="">
                                                        <label class="form-check-label" for="customCheckBox022"></label>
                                                    </div>
                                                </td>
                                                <td><span>{{ $user['id'] }}</span></td>
                                                <td>
                                                    <div class="products">

                                                        <div>
                                                            <h6>{{ $user['name'] }}
                                                            </h6>
                                                            {{-- <span>Web Designer</span> --}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="products">

                                                        <div>
                                                            <h6>{{ $user['username'] }}
                                                            </h6>
                                                            {{-- <span>Web Designer</span> --}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="products">

                                                        <div>
                                                            <h6>{{ $user['email'] }}
                                                            </h6>
                                                            {{-- <span>Web Designer</span> --}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="products">

                                                        <div>
                                                            <h6>{{ $user['address']['street'] }}
                                                            </h6>
                                                            {{-- <span>Web Designer</span> --}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="products">

                                                        <div>
                                                            <h6>{{ $user['phone'] }}
                                                            </h6>
                                                            {{-- <span>Web Designer</span> --}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="products">

                                                        <div>
                                                            <h6>{{ $user['website'] }}
                                                            </h6>
                                                            {{-- <span>Web Designer</span> --}}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="products">

                                                        <div>
                                                            <h6>{{ $user['company']['name'] }}
                                                            </h6>
                                                            {{-- <span>Web Designer</span> --}}
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex">
                                                        <a href="#" class="btn btn-primary shadow btn-xs sharp me-1"
                                                            data-bs-toggle="modal" data-bs-target="#">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>


                                                        <a href="#"
                                                            class="btn btn-danger shadow btn-xs sharp delete-driver-btn"
                                                            data-bs-toggle="modal" data-bs-target="#basicModal">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                                {{-- <td>
                                                <span>USA</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success light border-0">Active</span>
                                            </td> --}}
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

    <!--**********************************
                            Content body end
                        ***********************************-->
@endsection
