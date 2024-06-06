@extends('layout.app')
@section('content')
<div class="block justify-between page-header md:flex">
    <div>
        <h3
            class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
            </h3>
    </div>
    <ol class="flex items-center whitespace-nowrap min-w-0">
        <li class="text-[0.813rem] ps-[0.5rem]">
            <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                href="j{{ url('/') }}">
                Home
                <i
                    class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
            </a>
        </li>
        <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
            aria-current="page">
            Users
        </li>
    </ol>
</div>
    <!-- Page Header Close -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="box">
                <div class="box-header">
                    <h5 class="box-title">Users</h5>
                </div>
                <div class="box-body space-y-3">
                    <div class="download-data">
                        <button type="button" class="ti-btn ti-btn-primary" id="download-csv">Download CSV</button>
                        <button type="button" class="ti-btn ti-btn-primary" id="download-json">Download JSON</button>
                        <button type="button" class="ti-btn ti-btn-primary" id="download-xlsx">Download XLSX</button>
                        <button type="button" class="ti-btn ti-btn-primary" id="download-pdf">Download PDF</button>
                        <button type="button" class="ti-btn ti-btn-primary" id="download-html">Download HTML</button>
                    </div>
                    <div class="overflow-hidden table-bordered">
                        <table id="download-table" class="ti-custom-table ti-striped-table ti-custom-table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Company</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($responseData as $user)
                                <tr class="border border-x-0 border-defaultborder album-row">
                                    <td>{{ $user['id'] }}</td>
                                    <td>{!! '<div class="flex items-center gap-2"><div><a href="' . route('profile', ['id' => $user['id']]) . '" data-hs-overlay="#hs-overlay-contacts"><span class="block font-semibold">' . $user['name'] . '</span></a></div></div>' !!}</td>
                                    <td>{{ $user['username'] }}</td>
                                    <td>{{ $user['email'] }}</td>
                                    <td>{{ $user['address']['street'] }}</td>
                                    <td>{{ $user['phone'] }}</td>
                                    <td>{{ $user['website'] }}</td>
                                    <td>{{ $user['company']['name'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start::row-1 -->
    
    
    
    
    <!--End::row-1 -->

    

    
    

    
@endsection
