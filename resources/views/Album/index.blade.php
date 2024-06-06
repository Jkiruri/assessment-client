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
                    href="{{ url('/') }}">
                    Home
                    <i
                        class="ti ti-chevrons-right flex-shrink-0 text-[#8c9097] dark:text-white/50 px-[0.5rem] overflow-visible rtl:rotate-180"></i>
                </a>
            </li>
            <li class="text-[0.813rem] text-defaulttextcolor font-semibold hover:text-primary dark:text-[#8c9097] dark:text-white/50 "
                aria-current="page">
                Albums
            </li>
        </ol>
    </div>
    <!-- Page Header Close -->

    <!-- Start::row-1 -->
    <div class="grid grid-cols-12 gap-6">
        <div class="col-span-12">
            <div class="box">
                <div class="box-header">
                    <h5 class="box-title">Albums</h5>
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
                                    <th scope="col" class="text-start">Title</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($responseData as $album)
                                <tr class="border border-x-0 border-defaultborder crm-contact">
                                    <td>
                                        <input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="...">
                                    </td>
                                    <td>{{ $album['id'] }}</td>
                                    <td>
                                        <div class="flex items-center gap-2">
                                            
                                            <div>
                                                <a href="{{ route('profile', ['id' => $album['id']]) }}" data-hs-overlay="#hs-overlay-contacts">
                                                    <span class="block font-semibold">{{ $album['title'] }}</span>
                                                </a>
                                                
                                            </div>
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
