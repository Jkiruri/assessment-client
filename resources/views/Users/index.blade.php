@extends('layout.app')
@section('content')
    <div class="block justify-between page-header md:flex">
        <div>
            <h3
                class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">
                Users</h3>
        </div>
        <ol class="flex items-center whitespace-nowrap min-w-0">
            <li class="text-[0.813rem] ps-[0.5rem]">
                <a class="flex items-center text-primary hover:text-primary dark:text-primary truncate"
                    href="javascript:void(0);">
                    CRM
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

    <!-- Start::row-1 -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="box">
                <div class="box-header">
                    <h5 class="box-title">Download DataTable</h5>
                </div>
                <div class="box-body space-y-3">
                    <div class="download-data">
                        <button type="button" class="ti-btn ti-btn-primary" id="download-csv">Download CSV</button>
                        
                        <button type="button" class="ti-btn ti-btn-primary" id="download-xlsx">Download EXCEL</button>
                       
                        <button type="button" class="ti-btn ti-btn-primary" id="download-html">Print</button>
                    </div>
                    <div class="overflow-hidden table-bordered">
                        <table id="data-table" class="ti-custom-table ti-striped-table ti-custom-table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="...">
                                    </th>
                                    <th scope="col" class="text-start">Id</th>
                                    <th scope="col" class="text-start">Name</th>
                                    <th scope="col" class="text-start">Username</th>
                                    <th scope="col" class="text-start">Email</th>
                                    <th scope="col" class="text-start">Address</th>
                                    <th scope="col" class="text-start">Phone Number</th>
                                    <th scope="col" class="text-start">Website</th>
                                    <th scope="col" class="text-start">Company</th>
                                    <th scope="col" class="text-start">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($responseData as $user)
                                <tr class="border border-x-0 border-defaultborder crm-contact">
                                    <td>
                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                    </td>
                                    <td>{{ $user['id'] }}</td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            
                                            <div>
                                                <a href="{{ route('profile', ['id' => $user['id']]) }}" data-hs-overlay="#hs-overlay-contacts">
                                                    <span class="block font-semibold">{{ $user['name'] }}</span>
                                                </a>
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $user['username'] }}</td>
                                    <td>
                                        <div>
                                            <span class="block mb-1">
                                                <i class="ri-mail-line me-2 align-middle text-[.875rem] text-[#8c9097] dark:text-white/50 inline-flex"></i>{{ $user['email'] }}
                                            </span>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="block">{{ $user['address']['street'] }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <span class="block">
                                                <i class="ri-phone-line me-2 align-middle text-[.875rem] text-[#8c9097] dark:text-white/50 inline-flex"></i>{{ $user['phone'] }}
                                            </span>
                                        </div>
                                    </td>
                                    <td>{{ $user['website'] }}</td>
                                    <td>{{ $user['company']['name'] }}</td>
                                    <td>
                                        <div class="btn-list">
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-warning ti-btn-icon" data-hs-overlay="#hs-overlay-contacts">
                                                <i class="ri-eye-line"></i>
                                            </button>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-info ti-btn-icon">
                                                <i class="ri-pencil-line"></i>
                                            </button>
                                            <button aria-label="button" type="button" class="ti-btn ti-btn-sm ti-btn-danger ti-btn-icon contact-delete">
                                                <i class="ri-delete-bin-line"></i>
                                            </button>
                                        </div>
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
    
    
    
    <!--End::row-1 -->

    <!-- Start:: Contact Details Offcanvas -->
    <div class="hs-overlay hidden ti-offcanvas ti-offcanvas-right !max-w-[25rem] !border-0" tabindex="-1"
        id="hs-overlay-contacts">
        <div class="ti-offcanvas-body !p-0">
            <div
                class="sm:flex items-start p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10 main-profile-cover">
                <div class="avatar avatar-xxl avatar-rounded online me-4 !bottom-0 !mb-0">
                    <img src="build/assets/images/faces/4.jpg" alt="">
                </div>
                <div class="flex-grow main-profile-info">
                    <div class="flex items-center justify-between">
                        <h6 class="font-semibold mb-1 text-white">Lisa Convay</h6>
                        <button type="button"
                            class="ti-btn flex-shrink-0 !p-0  transition-none text-white opacity-70 hover:opacity-100 hover:text-white focus:ring-0 focus:ring-offset-0 focus:ring-offset-transparent focus:outline-0 focus-visible:outline-0 !mb-0"
                            data-hs-overlay="#hs-overlay-contacts">
                            <span class="sr-only">Close modal</span>
                            <i class="ri-close-line leading-none text-lg"></i>
                        </button>
                    </div>
                    <p class="mb-1 text-white  op-7">Chief Executive Officer (C.E.O)</p>
                    <p class="text-[0.75rem] text-white mb-4 opacity-[0.5]">
                        <span class="me-3"><i class="ri-building-line me-1 align-middle"></i>Georgia</span>
                        <span><i class="ri-map-pin-line me-1 align-middle"></i>Washington D.C</span>
                    </p>
                    <div class="flex mb-0">
                        <div class="me-4">
                            <p class="font-bold text-xl text-white text-shadow mb-0">113</p>
                            <p class="mb-0 text-[0.6875rem] opacity-[0.5] text-white">Deals</p>
                        </div>
                        <div class="me-4">
                            <p class="font-bold text-xl text-white text-shadow mb-0">$12.2k</p>
                            <p class="mb-0 text-[0.6875rem] opacity-[0.5] text-white">Contributions</p>
                        </div>
                        <div class="me-4">
                            <p class="font-bold text-xl text-white text-shadow mb-0">$10.67k</p>
                            <p class="mb-0 text-[0.6875rem] opacity-[0.5] text-white">Comitted</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                <div class="mb-0">
                    <p class="text-[0.9375rem] mb-2 font-semibold">Professional Bio :</p>
                    <p class="text-[#8c9097] dark:text-white/50 op-8 mb-0">
                        I am <b class="text-default">Lisa Convay,</b> here by conclude that,i am the founder and managing
                        director of the prestigeous company name laugh at all and acts as the cheif executieve officer of
                        the company.
                    </p>
                </div>
            </div>
            <div class="p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                <p class="text-[.875rem] mb-2 me-4 font-semibold">Contact Information :</p>
                <div class="">
                    <div class="flex items-center mb-2">
                        <div class="me-2">
                            <span class="avatar avatar-sm avatar-rounded bg-light !text-[#8c9097] dark:text-white/50">
                                <i class="ri-mail-line align-middle text-[.875rem]"></i>
                            </span>
                        </div>
                        <div>
                            sonyataylor2531@gmail.com
                        </div>
                    </div>
                    <div class="flex items-center mb-2">
                        <div class="me-2">
                            <span class="avatar avatar-sm avatar-rounded bg-light !text-[#8c9097] dark:text-white/50">
                                <i class="ri-phone-line align-middle text-[.875rem]"></i>
                            </span>
                        </div>
                        <div>
                            +(555) 555-1234
                        </div>
                    </div>
                    <div class="flex items-center mb-0">
                        <div class="me-2">
                            <span class="avatar avatar-sm avatar-rounded bg-light !text-[#8c9097] dark:text-white/50">
                                <i class="ri-map-pin-line align-middle text-[.875rem]"></i>
                            </span>
                        </div>
                        <div>
                            MIG-1-11, Monroe Street, Georgetown, Washington D.C, USA,20071
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10 flex items-center">
                <p class="text-[.875rem] mb-0 me-4 font-semibold">Social Networks :</p>
                <div class="btn-list mb-0 gap-2 flex">
                    <button aria-label="button" type="button"
                        class="ti-btn w-[1.75rem] h-[1.75rem] text-[0.8rem] py-[0.26rem] px-2 rounded-sm ti-btn-primary mb-0">
                        <i class="ri-facebook-line font-semibold"></i>
                    </button>
                    <button aria-label="button" type="button"
                        class="ti-btn w-[1.75rem] h-[1.75rem] text-[0.8rem] py-[0.26rem] px-2 rounded-sm ti-btn-secondary mb-0">
                        <i class="ri-twitter-line font-semibold"></i>
                    </button>
                    <button aria-label="button" type="button"
                        class="ti-btn w-[1.75rem] h-[1.75rem] text-[0.8rem] py-[0.26rem] px-2 rounded-sm ti-btn-warning mb-0">
                        <i class="ri-instagram-line font-semibold"></i>
                    </button>
                    <button aria-label="button" type="button"
                        class="ti-btn w-[1.75rem] h-[1.75rem] text-[0.8rem] py-[0.26rem] px-2 rounded-sm ti-btn-success mb-0">
                        <i class="ri-github-line font-semibold"></i>
                    </button>
                    <button aria-label="button" type="button"
                        class="ti-btn w-[1.75rem] h-[1.75rem] text-[0.8rem] py-[0.26rem] px-2 rounded-sm ti-btn-danger mb-0">
                        <i class="ri-youtube-line font-semibold"></i>
                    </button>
                </div>
            </div>
            <div class="p-6 border-b border-dashed border-defaultborder dark:border-defaultborder/10">
                <p class="text-[.875rem] mb-2 me-4 font-semibold">Tags :</p>
                <div>
                    <span class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">New Lead</span>
                    <span class="badge bg-light text-[#8c9097] dark:text-white/50 m-1">Others</span>
                </div>
            </div>
            <div class="p-4">
                <p class="text-[.875rem] mb-2 font-semibold">Relationship Manager :
                    <a class="text-[.875rem] text-primary mb-0 ltr:float-right rtl:float-left"
                        href="javascript:void(0);"><i class="ri-add-line me-1 align-middle"></i>Add Manager</a>
                </p>
                <div class="avatar-list-stacked">
                    <span class="avatar avatar-rounded">
                        <img src="build/assets/images/faces/2.jpg" alt="img">
                    </span>
                    <span class="avatar avatar-rounded">
                        <img src="build/assets/images/faces/8.jpg" alt="img">
                    </span>
                    <span class="avatar avatar-rounded">
                        <img src="build/assets/images/faces/2.jpg" alt="img">
                    </span>
                    <span class="avatar avatar-rounded">
                        <img src="build/assets/images/faces/10.jpg" alt="img">
                    </span>
                </div>
            </div>
        </div>
    </div>

    
<script>
    $(document).ready(function() {
    // Initialize DataTable without the extra buttons
    var table = $('#data-table').DataTable({
        paging: true,
        dom: 'Bfrtip',
        buttons: []
    });

    // Custom button actions for exporting
    $('#download-csv').on('click', function() {
        table.button('.buttons-csv').trigger();
    });

    $('#download-json').on('click', function() {
        var data = table.rows().data().toArray();
        var json = JSON.stringify(data, null, 2);
        var blob = new Blob([json], {type: "application/json"});
        var url  = URL.createObjectURL(blob);
        var a = document.createElement('a');
        a.download = "data.json";
        a.href = url;
        a.textContent = "Download data.json";
        a.click();
    });

    $('#download-xlsx').on('click', function() {
        table.button('.buttons-excel').trigger();
    });

    $('#download-pdf').on('click', function() {
        table.button('.buttons-pdf').trigger();
    });

    $('#download-html').on('click', function() {
        table.button('.buttons-print').trigger();
    });

    // Add the DataTable export buttons to the table
    new $.fn.dataTable.Buttons(table, {
        buttons: [
            { extend: 'csv', className: 'buttons-csv hidden' },
            { extend: 'excel', className: 'buttons-excel hidden' },
            { extend: 'pdf', className: 'buttons-pdf hidden' },
            { extend: 'print', className: 'buttons-print hidden' }
        ]
    });

    table.buttons().container().appendTo($('#data-table_wrapper .col-md-6:eq(0)'));
});

</script>

    </style>
@endsection
