@extends('admin.admin_layout.main')
@section('title', 'Course Fee List')
@section('customcss')
<link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<link href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
        </div>
        @endif
        @if ($message = Session::get('danger'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>	
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>
</div>
<div class="row">
    <div class="col-12">
        <a href="{{ route('admin.course-fee.create') }}"><button class="btn btn-primary">Add New</button></a>
    </div>
</div>

<!-- Grids Info -->
<div class="outer-w3-agile mt-3">
    <h4 class="tittle-w3-agileits mb-4">Course Fee List</h4>
    <table class="table table-bordered table-striped" id="dataTableHover">
        <thead>
            <tr>
                <th>Sr. no</th>
                <th>Course</th>
                <th>Test Series</th>
                <th>Group Name</th>
                <th>Fees</th>
                <th>Action</th>
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
var SITEURL = '{{ route('admin.course-fee.index')}}';

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
        { data: 'course', name: 'course' },
        { data: 'test_series', name: 'test_series' },
        { data: 'group_name', name: 'group_name' },
        { data: 'fees', name: 'fees' },
        { data: 'action', name: 'action' },
    ],
    order: [[0, 'desc']]
    })
});
</script>
@endsection