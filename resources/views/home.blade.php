@extends('auth.userMain')
@section('title', 'Dashboard')
    
@section('content')
<!-- Model -->
<div class="container-fluid  container-user " id="page-scroll">
    <div class="container main-container-card">
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
        @if(empty($testPayment))
        <div class="row ">
            <div class="col-sm-12 col-lg-3 card-column p-5 text-center">
                <h6 class="course-text">CA Final (New Course)</h6>
                <br>
                <a href="#plan_detials"> <button class="btn btn-primary">Details</button></a>
                <button type="button" class="btn btn-primary" onclick="modal('myModal', 'CA Final (New Course)')">
                    See Plan
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">CA Final ( New Course)</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th colspan="2"></th>
                                            <th>Step By Step Test Series</th>
                                            <th> Solo Test series</th>
                                            <th>Duo Test Series</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>2 Part Tests+2 Full Syllabus Tests per Subject.</td>
                                            <td>1 Full syllabus test for each subject</td>
                                            <td>2 Full Syllabus Tests Per Subject.</td>
                                        </tr>
                                        <tr>

                                            <td colspan="2">Cost Per Subject</td>
                                            <td>740</td>
                                            <td>200</td>
                                            <td>380</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Discount For more then one subject</td>
                                            <td>5%</td>
                                            <td>5%</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Cost For Group I</td>

                                            <td>2812</td>
                                            <td>760</td>
                                            <td>1444</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Cost For Group II</td>

                                            <td>2812</td>
                                            <td>760</td>
                                            <td>1444</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Cost For Both Group</td>

                                            <td>5343</td>
                                            <td>1444</td>
                                            <td>2744</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">EVALUATION IN 48 Hrs.</td>

                                            <td>YES</td>
                                            <td>YES</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">DETAILED ANALYSIS & REVIEW OF <br> EVERY ANSWER</td>

                                            <td>YES</td>
                                            <td>YES</td>
                                            <td>YES</td>
                                        </tr>
                                        
                                        <tr>
                                            <td colspan="2">PROVIDE EXPERT GUIDENCE</td>

                                            <td>YES</td>
                                            <td>YES</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>

                                            <td><a href="dummy.pdf">View Schedule Plan</a> <br> <a
                                                    href="dummy.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="dummy.pdf">View Schedule Plan</a> <br> <a
                                                    href="dummy.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="dummy.pdf">View Schedule Plan</a> <br> <a
                                                    href="dummy.pdf">View Unschedule Plan</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button data-id="" class="btn-log payment" onclick="$('#myModal').modal('hide')">Payment</button>

                            </div>


                        </div>
                    </div>
                </div>

            </div>
            
            <div class="modal fade" id="myModal5" style="overflow-y:auto;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <form method="POST" id="submitForm" action="{{ route('store-payment-details') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-sm-12 col-md-6 col-lg-">
                                                <label for="name"><b>Name</b> <span class="text-danger" id="name_err"></span></label>
                                                <input type="text" placeholder="Enter Name" id="name" name="name" class="form-control">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-">
                                                <label for="email"><b>Email</b> <span class="text-danger" id="email_err"></span></label>
                                                <input type="email" placeholder="Enter Email" id="email" name="email" class="form-control">
                                            </div>
                                    
                                            <div class="col-sm-12 col-md-6 col-lg-">
                                                <label for="mobile_no"><b> Mobile No.</b> <span class="text-danger" id="mobile_err"></span></label>
                                                <input type="number" placeholder="Enter Mobile.No" id="mobile_no" name="mobile_no" class="form-control"> 
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-">
                                                <label for="test_series" id="course-text" class="mt-2">  <span class="text-danger" id="test_err"></span></label>
                                                <select class="form-control" id="test_series" name="test_series">
                                                    <option value="">-Select-</option>
                                                    <option value="Step By Step">Step By Step</option>
                                                    <option value="Solo">Solo</option>
                                                    <option value="Duo">Duo</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-12 col-md-6 col-lg-">
                                                <label for="group"><b>Group</b> <span class="text-danger" id="group_err"></span></label>
                                                <select class="form-control" id="group" name="group_name">
                                                    <option value="">-Select-</option>
                                                    <option value="Group I">Group I</option>
                                                    <option value="Group II">Group II</option>
                                                    <option value="Both Group">Both Group</option>
                                                </select>
                                            </div>

                                            <div class="col-sm-12 col-md-6 col-lg-">
                                                <label for="pay_amount"><b>Referral Code</b> <span id="referral_err" class="text-danger"></span></label>
                                                <input type="text" name="referral_code" id="referral_code" class="form-control">
                                            </div>
                                            <div class="col-sm-12 col-md-6 col-lg-">
                                                <label for="pay_amount"><b>Payment Amount</b></label>
                                                <input type="text" name="pay_amount" class="form-control" id="pay_amount" readonly>
                                            </div>

                                            <div class="col-sm-12 col-md-6 col-lg-">
                                                <label for="image">Upload receipt <span class="text-danger" id="image_err"></span></label>
                                                <input type="file" class="form-control-file text-dark" id="image" name="image">
                                            </div>

                                            <input type="hidden" id="course" name="course_name" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <img src="img/barcode.jpg" alt="Barcode" style="width:70%;">
                                        <p class="mt-2 mb-2 text-dark">Scan this barcode and make payment. After payment successful upload receipt.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" id="submitPayment" class="btn-log">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-3 card-column p-5 text-center">
                <h6 class="course-text">CA Final (Old Course)</h6>
                <br>
                <a href="#plan_detials"> <button class="btn btn-primary">Details</button></a>
                <button type="button" class="btn btn-primary"  onclick="modal('myModal2', 'CA Final (Old Course)')">
                    See Plan
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModal2">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">CA Final ( Old Course)</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th colspan="2"></th>
                                            <th>Step By Step Test Series</th>
                                            <th> Solo Test series</th>
                                            <th>Duo Test Series</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>2 Part Tests+2 Full Syllabus Tests per Subject.</td>
                                            <td>1 Full syllabus test for each subject</td>
                                            <td>2 Full Syllabus Tests Per Subject.</td>
                                        </tr>
                                        <tr>

                                            <td colspan="2">Cost Per Subject</td>
                                            <td>540</td>
                                            <td>200</td>
                                            <td>380</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Discount For more then one subject</td>
                                            <td>5%</td>
                                            <td>5%</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Cost For Group I</td>

                                            <td>2052</td>
                                            <td>760</td>
                                            <td>1444</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Cost For Group II</td>

                                            <td>2052</td>
                                            <td>760</td>
                                            <td>1444</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Cost For Both Group</td>

                                            <td>3899</td>
                                            <td>1444</td>
                                            <td>2744</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">EVALUATION IN 48 Hrs.</td>

                                            <td>YES</td>
                                            <td>YES</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">DETAILED ANALYSIS & REVIEW OF <br> EVERY ANSWER</td>

                                            <td>YES</td>
                                            <td>YES</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">PROVIDE EXPERT GUIDENCE</td>

                                            <td>YES</td>
                                            <td>YES</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>

                                            <td><a href="dummy.pdf">View Schedule Plan</a> <br> <a
                                                    href="dummy.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="dummy.pdf">View Schedule Plan</a> <br> <a
                                                    href="dummy.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="dummy.pdf">View Schedule Plan</a> <br> <a
                                                    href="dummy.pdf">View Unschedule Plan</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button style="width:auto;" data-id="" class="btn-log payment" onclick="$('#myModal2').modal('hide')">Payment</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-3 card-column p-5 text-center">
                <h6 class="course-text"> CA Intermediate</h6>
                <br>
                <a href="#plan_detials"> <button class="btn btn-primary">Details</button></a>
                <button type="button" class="btn btn-primary" onclick="modal('myModal3', 'CA Intermediate')">
                    See Plan
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModal3">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">CA Intermediate</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th colspan="2"></th>
                                            <th>Step By Step Test Series</th>
                                            <th> Solo Test series</th>
                                            <th>Duo Test Series</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>2 Part Tests+2 Full Syllabus Tests per Subject.</td>
                                            <td>1 Full syllabus test for each subject</td>
                                            <td>2 Full Syllabus Tests Per Subject.</td>
                                        </tr>
                                        <tr>

                                            <td colspan="2">Cost Per Subject</td>
                                            <td>540</td>
                                            <td>200</td>
                                            <td>380</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Discount For more then one subject</td>
                                            <td>5%</td>
                                            <td>5%</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Cost For Group I</td>

                                            <td>2052</td>
                                            <td>760</td>
                                            <td>1444</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Cost For Group II</td>

                                            <td>2052</td>
                                            <td>760</td>
                                            <td>1444</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Cost For Both Group</td>

                                            <td>3899</td>
                                            <td>1444</td>
                                            <td>2744</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">EVALUATION IN 48 Hrs.</td>

                                            <td>YES</td>
                                            <td>YES</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">DETAILED ANALYSIS & REVIEW OF <br> EVERY ANSWER</td>

                                            <td>YES</td>
                                            <td>YES</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">PROVIDE EXPERT GUIDENCE</td>

                                            <td>YES</td>
                                            <td>YES</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>

                                            <td><a href="dummy.pdf">View Schedule Plan</a> <br> <a
                                                    href="dummy.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="dummy.pdf">View Schedule Plan</a> <br> <a
                                                    href="dummy.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="dummy.pdf">View Schedule Plan</a> <br> <a
                                                    href="dummy.pdf">View Unschedule Plan</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button data-id="" class="btn-log payment" onclick="$('#myModal3').modal('hide')">Payment</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-lg-3 card-column p-5 text-center">
                <h6 class="course-text">CA IPCC </h6>
                <br>
                <a href="#plan_detials"> <button class="btn btn-primary">Details</button></a>
                <button type="button" class="btn btn-primary" onclick="modal('myModal4', 'CA IPCC')">
                    See Plan
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModal4">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">CA IPCC</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th colspan="2"></th>
                                            <th>Step By Step Test Series</th>
                                            <th> Solo Test series</th>
                                            <th>Duo Test Series</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2"></td>
                                            <td>2 Part Tests+2 Full Syllabus Tests per Subject.</td>
                                            <td>1 Full syllabus test for each subject</td>
                                            <td>2 Full Syllabus Tests Per Subject.</td>
                                        </tr>
                                        <tr>

                                            <td colspan="2">Cost Per Subject</td>
                                            <td>540</td>
                                            <td>200</td>
                                            <td>380</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Discount For more then one subject</td>
                                            <td>5%</td>
                                            <td>5%</td>
                                            <td>5%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Cost For Group I</td>

                                            <td>2052</td>
                                            <td>760</td>
                                            <td>1444</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Cost For Group II</td>

                                            <td>2052</td>
                                            <td>760</td>
                                            <td>1444</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Cost For Both Group</td>

                                            <td>3899</td>
                                            <td>1444</td>
                                            <td>2744</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">EVALUATION IN 48 Hrs.</td>

                                            <td>YES</td>
                                            <td>YES</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">DETAILED ANALYSIS & REVIEW OF <br> EVERY ANSWER</td>

                                            <td>YES</td>
                                            <td>YES</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">PROVIDE EXPERT GUIDENCE</td>

                                            <td>YES</td>
                                            <td>YES</td>
                                            <td>YES</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"></td>

                                            <td><a href="dummy.pdf">View Schedule Plan</a> <br> <a
                                                    href="dummy.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="dummy.pdf">View Schedule Plan</a> <br> <a
                                                    href="dummy.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="dummy.pdf">View Schedule Plan</a> <br> <a
                                                    href="dummy.pdf">View Unschedule Plan</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button data-id="" class="btn-log payment" onclick="$('#myModal4').modal('hide');">Payment</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @elseif($testPayment->status === null) 
        <div class="row ">
            <div class="col-sm-12 col-lg-12 card-column p-5 text-center">
                <h6 class="course-text">Check your aprroval by using name and email address.</h6>
                <br>

                <form method="post" action="{{ route('approve') }}" id="submitApproval">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="name" class="text-white">Name: <span class="text-danger" id="nameErr"></span></label>
                            <input type="text" class="form-control" id="search-name" name="name">
                        </div>
                        <div class="form-group col-md-4 mt-2">
                            <label for="email" class="text-white">Email: <span class="text-danger" id="emailErr"></span></label>
                            <input type="email" class="form-control" id="search-email" name="email">
                        </div>
                        <div class="form-group col-md-4 mt-2">
                            <button type="button" id="search" class="btn btn-primary">Search</button>
                            <button type="button" id="approve" class="btn btn-primary">Approve</button>
                        </div>
                    </div>                     
                </form>
                <div class="row">
                    <div class="col-md-12">
                        <h6 id="search-result"></h6>
                    </div>
                </div>
            </div>                
        </div>
        @else 
        <div class="row ">
            <?php 
                $paper = DB::table('upload_papers')->where('user_id', auth()->user()->id)->first();
            ?>
            <div class="col-sm-12 col-lg-6 card-column p-5 text-center">
                @if(!empty($paper))
                <a href="{{ asset('Papers/'.$paper->file) }}" class="text-light" target="_blank">   <button type="button" class="btn btn-success">Download Paper <i class="fa fa-download"></i></a>
                    <span class="oi oi-data-transfer-download"></span></button>
                @else 
                <h5>There is no paper available to download</h5>
                @endif
            </div>
            <div class="col-sm-12 col-lg-6 card-column p-5 text-center">
                <form method="POST" action="{{ route('submit-answersheet') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter your full name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" id="fileToUpload" style="background-color:#17a2b8;">
                        @error('file')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <input type="hidden" name="course_name" value="{{ $testPayment->course_name }}">
                    
                    <button type="submit" class="btn btn-primary">Upload Answer paper</button>
                    
                </form>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection

@section('customjs')
<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function modal(value, course)
{
    $("#"+value).modal('show');
    $("#"+value+" .payment").attr('data-id', course);
}
$('.payment').on('click', function() {
    var course=$(this).data('id'); 
    $('#myModal5').modal('show');
    $('#course-text').html(course);
    $('#course').val(course);
});

$('body').on('click', '#submitPayment', function () {
    var name = $("#name").val();
    var email = $("#email").val();
    var mobile_no = $("#mobile_no").val();
    var test_series = $("#test_series").val();
    var group = $("#group").val();
    var image = $("#image").val();
    // alert(is_parent);
    if (name=="") {
        $("#name_err").fadeIn().html("Required");
        setTimeout(function(){ $("#name_err").fadeOut(); }, 3000);
        $("#name").focus();
        return false;
    }
    if (email=="") {
        $("#email_err").fadeIn().html("Required");
        setTimeout(function(){ $("#email_err").fadeOut(); }, 3000);
        $("#email").focus();
        return false;
    }
    if (mobile_no=="") {
        $("#mobile_err").fadeIn().html("Required");
        setTimeout(function(){ $("#mobile_err").fadeOut(); }, 3000);
        $("#mobile_no").focus();
        return false;
    }
    if (test_series=="") {
        $("#test_err").fadeIn().html("Required");
        setTimeout(function(){ $("#test_err").fadeOut(); }, 3000);
        $("#test_series").focus();
        return false;
    }
    if (group=="") {
        $("#group_err").fadeIn().html("Required");
        setTimeout(function(){ $("#group_err").fadeOut(); }, 3000);
        $("#group").focus();
        return false;
    }
    if (image=="") {
        $("#image_err").fadeIn().html("Required");
        setTimeout(function(){ $("#image_err").fadeOut(); }, 3000);
        $("#image").focus();
        return false;
    }
    else
    { 
        $('#submitForm').submit();
    }
})

$('body').on('change', '#test_series', function () {
    var test_series = $("#test_series").val();
    var course_name = $("#course").val();
    var group_name = $("#group").val();
    var referral_code = $("#referral_code").val();
    $.ajax({
        type:"POST",
        url:"{{ route('search-payment-amount') }}",
        data:{test_series:test_series, course_name:course_name,group_name:group_name, referral_code:referral_code},
        cache:false,        
        success:function(returndata)
        {
            $('#pay_amount').val(returndata);
        }
    });
})

$('body').on('change', '#group', function () {
    var test_series = $("#test_series").val();
    var course_name = $("#course").val();
    var group_name = $("#group").val();
    var referral_code = $("#referral_code").val();
    $.ajax({
        type:"POST",
        url:"{{ route('search-payment-amount') }}",
        data:{test_series:test_series, course_name:course_name,group_name:group_name, referral_code:referral_code},
        cache:false,        
        success:function(returndata)
        {
            $('#pay_amount').val(returndata);
        }
    });
})

$('body').on('keyup', '#referral_code', function () {
    var test_series = $("#test_series").val();
    var course_name = $("#course").val();
    var group_name = $("#group").val();
    var referral_code = $("#referral_code").val();
    $.ajax({
        type:"POST",
        url:"{{ route('search-payment-amount') }}",
        data:{test_series:test_series, course_name:course_name,group_name:group_name, referral_code:referral_code},
        cache:false,        
        success:function(returndata)
        {
            $('#pay_amount').val(returndata);
        }
    });
})

$('body').on('click', '#search', function () {
    var name = $("#search-name").val();
    var email = $("#search-email").val();
    // alert(is_parent);
    if (name=="") {
        $("#nameErr").fadeIn().html("Required");
        setTimeout(function(){ $("#nameErr").fadeOut(); }, 3000);
        $("#search-name").focus();
        return false;
    }
    if (email=="") {
        $("#emailErr").fadeIn().html("Required");
        setTimeout(function(){ $("#emailErr").fadeOut(); }, 3000);
        $("#search-email").focus();
        return false;
    }
    else
    { 
        $.ajax({
            // assign a controller function to perform search action - route name is search
            url:"{{ route('search-approval') }}",
            // since we are getting data methos is assigned as GET
            type:"GET",
            // data are sent the server
            data:{ name:name, email:email },
            // if search is succcessfully done, this callback function is called
            success:function (data) {
                $('#search-result').html(data);
            }
        })
        // end of ajax call
    }
})

$('body').on('click', '#approve', function () {
    var name = $("#search-name").val();
    var email = $("#search-email").val();
    // alert(is_parent);
    if (name=="") {
        $("#nameErr").fadeIn().html("Required");
        setTimeout(function(){ $("#nameErr").fadeOut(); }, 3000);
        $("#search-name").focus();
        return false;
    }
    if (email=="") {
        $("#emailErr").fadeIn().html("Required");
        setTimeout(function(){ $("#emailErr").fadeOut(); }, 3000);
        $("#search-email").focus();
        return false;
    }
    else
    { 
        $('#submitApproval').submit();
    }
})

$(document).ready(function () {
    // keyup function looks at the keys typed on the search box
    $('#referral_code').on('keyup',function() {
        // the text typed in the input field is assigned to a variable 
        var query = $(this).val();
        // call to an ajax function
        $.ajax({
            // assign a controller function to perform search action - route name is search
            url:"{{ route('test-referral-code') }}",
            // since we are getting data methos is assigned as GET
            type:"GET",
            // data are sent the server
            data:{'referral_code':query},
            // if search is succcessfully done, this callback function is called
            success:function (data) {
                // print the search results in the div called country_list(id)
                console.log(data);
                if(data.error) {
                    $('#referral_err').html(data.error);
                }
                $('#referral_err').html(data.success);
            }
        })
        // end of ajax call
    });
})
</script>
@endsection
