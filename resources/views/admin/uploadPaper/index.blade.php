@extends('admin.admin_layout.main')
@section('title', 'Upload Paper')
@section('customcss')
<link href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<link href="//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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
 <!-- Grids Content -->
 <section class="grids-section bd-content">

<!-- Grids Info -->
<div class="outer-w3-agile mt-3">
    <h4 class="tittle-w3-agileits mb-4">Upload Paper</h4>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
                <form method="POST" action="{{ route('admin.paper-submit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Course Name</label>
                                <select class="form-control @error('course_name') is-invalid @enderror" name="course_name">
                                    <option value="">-Select-</option>
                                    <option value="CA Final (New Course)">CA Final (New Course)</option>
                                    <option value="CA Final (Old Course)">CA Final (Old Course)</option>
                                    <option value="CA Intermediate">CA Intermediate</option>
                                    <option value="CA IPCC">CA IPCC</option>
                                </select>
                                @error('course_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Paper</label>
                                <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" id="exampleFormControlFile1">
                                @error('file')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                           <button type="submit" class="btn btn-success mt-3" ><i class="fa fa-upload"></i> Upload Test Paper</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="container  mt-5">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 mt-2">
                <table class="table table-bordered text-center" id="dataTableHover">
                    <thead>
                      <tr>
                        <th>Sr. no.</th>
                        <th>Course Name</th>
                        <th>File</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</div>

</section>

<!--// Grids Content -->

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
var SITEURL = '{{ route('admin.upload-paper')}}';

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
        { data: 'file', name: 'file' },
        { data: 'action', name: 'action' },
    ],
    order: [[0, 'desc']]
    })
});

$('body').on('click', '.delete', function () {
    var id = $(this).data("id");

    if(confirm("Are You sure want to delete !")){
        $.ajax({
            type: "delete",
            url: "{{ url('admin/upload-paper') }}"+'/'+id,
            success: function (data) {
            var oTable = $('#dataTableHover').dataTable(); 
            oTable.fnDraw(false);
            toastr.success(data.success);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    }
});
</script>
@endsection