@extends('admin.admin_layout.main')
@section('title', 'CA Intermediate Payment')
@section('customcss')
<link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<link href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://use.fontawesome.com/d5c7b56460.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<style>
    td.details-control:before {
    font-family: 'FontAwesome';
    content: '\f105';
    display: block;
    text-align: center;
    font-size: 20px;
}
tr.shown td.details-control:before{
   font-family: 'FontAwesome';
    content: '\f107';
    display: block;
    text-align: center;
    font-size: 20px;
}
</style>
@endsection
@section('content')
<!-- Grids Content -->
<section class="grids-section bd-content">
    <!-- Grids Info -->
    <div class="outer-w3-agile mt-3">
        <h4 class="tittle-w3-agileits mb-4">CA Intermediate</h4> 
        <table class="table table-bordered table-striped text-center mt-5" id="dataTableHover">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile number</th>
                    <th>Test series</th>
                    <th>Group</th>
                    <th>Payment Amount</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>  
    </div>                   
</section>
@endsection
@section('customjs')
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
var SITEURL = '{{ route('admin.ca-intermediate-payment')}}';
function format ( d ) {
    // `d` is the original data object for the row
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px; width:100%">'+
        '<tr>'+
            '<td style="text-align:center">Image</td>'+
            '<td style="text-align:center">'+d.image+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td style="text-align:center">Status</td>'+
            '<td style="text-align:center">'+d.status+'</td>'+
        '</tr>'+
        '<tr>'+
            '<td style="text-align:center">Action</td>'+
            '<td style="text-align:center">'+d.action+'</td>'+
        '</tr>'+
    '</table>';
}
$(document).ready(function() {
    var table =$('#dataTableHover').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: SITEURL,
        type: 'GET',
    },
    columns: [
        {
            "className":      'details-control',
            "orderable":      false,
            "data":           null,
            "defaultContent": ''
        },
        { data: 'name', name: 'name' },
        { data: 'email', name: 'email' },
        { data: 'mobile_no', name: 'mobile_no' },
        { data: 'test_series', name: 'test_series' },
        { data: 'group', name: 'group' },
        { data: 'amount', name: 'amount' },
    ],
    order: [[0, 'desc']]
    })
    $('#dataTableHover tbody').on('click', 'td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = table.row( tr );

        if ( row.child.isShown() ) {
            // This row is already open - close it
            row.child.hide();
            tr.removeClass('shown');
        }
        else {
            // Open this row
            row.child( format(row.data()) ).show();
            tr.addClass('shown');
        }
    });
});

$('body').on('click', '.approve', function () {
    var id = $(this).data("id");
    if(id){
        $.ajax({
            type: "post",
            url: "{{ url('admin/payment-approve') }}",
            data: { id:id },
            success: function (data) {
                var oTable = $('#dataTableHover').dataTable(); 
                oTable.fnDraw(false);
                if(data.success){
                toastr.success(data.success);
                } else{
                    toastr.error(data.error);
                }
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }
});

$('body').on('click', '.reject', function () {
    var id = $(this).data("id");
    if(id){
        $.ajax({
            type: "post",
            url: "{{ url('admin/payment-reject') }}",
            data: { id:id },
            success: function (data) {
                var oTable = $('#dataTableHover').dataTable(); 
                oTable.fnDraw(false);
                if(data.success){
                toastr.success(data.success);
                } else{
                    toastr.error(data.error);
                }
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }
});
</script>
@endsection