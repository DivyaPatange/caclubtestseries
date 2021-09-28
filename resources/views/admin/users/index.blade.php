@extends('admin.admin_layout.main')
@section('title', 'Users List')
@section('customcss')
<link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<link href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection
@section('content')
<!-- Grids Info -->
<div class="outer-w3-agile mt-3">
    <h4 class="tittle-w3-agileits mb-4">Users</h4>
    <table class="table table-bordered table-striped" id="dataTableHover">
        <thead>
            <tr>
                <th>Sr. no</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile number</th>
                <th>Referral code</th>
                <th>ICAI Reg No.</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>          
@endsection
@section('customjs')
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script>
var SITEURL = '{{ route('admin.users.index')}}';

$(document).ready(function() {
    var table =$('#dataTableHover').DataTable({
    processing: true,
    serverSide: true,
    ajax: {
        url: SITEURL,
        type: 'GET',
    },
    columns: [
        { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false,searchable: false },
        { data: 'name', name: 'name' },
        { data: 'email', name: 'email' },
        { data: 'mobile_no', name: 'mobile_no' },
        { data: 'referral_code', name: 'referral_code' },
        { data: 'icai_no', name: 'icai_no' },
    ],
    order: [[0, 'desc']]
    })
});
</script>
@endsection