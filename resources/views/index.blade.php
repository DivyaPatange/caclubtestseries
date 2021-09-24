@extends('auth.main')
@section('title', 'Index')

@section('customcss')
@endsection

@section('content')
<div class="container-fluid container-bg  ">
    <div class="container ">
        <div class="outer">
            <div id="demo" class="carousel slide pt-5" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner text-center text-light pt-5 ">
                    <div class="carousel-item active">



                        <div class="typewriter pt-5">
                            <h1> <strong style="color:#f2aa4cff;text-shadow:2px 2px 2px gray;"> CA CLUB Test Series
                                </strong> for CA Final (old and new course) </h1>
                            <h1> CA Intermediate ( old & new course) </h1>
                            <h1><strong style="color:#f2aa4cff;text-shadow:2px 2px 2px gray;"> secure your results
                                    before final exams</strong></h1>
                        </div>
                        <!--<p class="pt-2 mt-2">Build Skills with courses,certificates and degrees online from world-->
                        <!--    class university-->
                        <!--    and expert faculties.-->
                        <!--</p>-->

                        <a href="#page-scroll"> <button class="join-btn">GET STARTED</button></a>

                    </div>
                    <div class="carousel-item">



                        <div class="typewriter pt-5">
                            <h1> Test series prepared by </h1>
                            <h1> <strong style="color:#f2aa4cff;text-shadow:2px 2px 2px gray;">CA's and checked by
                                    CA's </strong></h1>
                        </div>
                        <!--<p class="pt-2 mt-2">We had such a great time in LA! We had such a great time in LA!</p>-->
                        <br><br>
                        <a href="#page-scroll"> <button class="join-btn">GET STARTED</button></a>


                    </div>

                </div><br><br><br><br>
                <a class="carousel-control-prev prev-btn" href="#demo" data-slide="prev">
                </a>
                <a class="carousel-control-next next-btn" href="#demo" data-slide="next">
                </a>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid  container-card " id="page-scroll">
    <div class="container main-container-card">
        <div class="row ">
            <div class="col-sm-12 col-lg-3 card-column p-5 text-center">
                <h6 class="course-text">CA Final (New Course)</h6>
                <br>
                <a href="#plan_detials"> <button class="btn btn-primary">Details</button></a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal1">
                    See Plan
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal1">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">CA Final New Syllabus</h4>
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
                                            <td>4 Part Tests + 2 Full Syllabus Tests per Subject.
                                                </td>
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

                                            <td><a href="CA Final Old Scheduled Test.pdf">View Schedule Plan</a> <br> 
                                            <a href="CA Final Old Un-Schedules Test.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="CA Final Old Scheduled Test.pdf">View Schedule Plan</a> <br> 
                                            <a href="CA Final Old Un-Schedules Test.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="CA Final Old Scheduled Test.pdf">View Schedule Plan</a> <br>
                                            <a href="CA Final Old Un-Schedules Test.pdf">View Unschedule Plan</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button onclick="document.getElementById('id02').style.display='block'; $('#myModal1').modal('hide')"
                                    style="width:auto;" class="btn-log">Enroll Now</button>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-lg-3 card-column p-5 text-center">



                <h6 class="course-text">CA Final (Old Course)</h6>
                <br>
                <a href="#plan_detials"> <button class="btn btn-primary">Details</button></a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">
                    See Plan
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModal2">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">CA Final Old Syllabus</h4>
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

                                            <td><a href="CA Final Old Scheduled Test.pdf">View Schedule Plan</a> <br> <a
                                                    href="CA Final Old Un-Schedules Test.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="CA Final Old Scheduled Test.pdf">View Schedule Plan</a> <br> <a
                                                    href="CA Final Old Un-Schedules Test.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="CA Final Old Scheduled Test.pdf">View Schedule Plan</a> <br> <a
                                                    href="CA Final Old Un-Schedules Test.pdf">View Unschedule Plan</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button onclick="document.getElementById('id02').style.display='block';  $('#myModal2').modal('hide')"
                                    style="width:auto;" class="btn-log">Enroll Now</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>





            <div class="col-sm-12 col-lg-3 card-column p-5 text-center">


                <h6 class="course-text"> CA Intermediate</h6>
                <br>
                <a href="#plan_detials"> <button class="btn btn-primary">Details</button></a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal3">
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
                                            <td>4 Part Tests+2 Full Syllabus Tests per Subject.</td>
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

                                            <td><a href="CA Final Old Scheduled Test.pdf">View Schedule Plan</a> <br> <a
                                                    href="CA Final Old Un-Schedules Test.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="CA Final Old Scheduled Test.pdf">View Schedule Plan</a> <br> <a
                                                    href="CA Final Old Un-Schedules Test.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="CA Final Old Scheduled Test.pdf">View Schedule Plan</a> <br> <a
                                                    href="CA Final Old Un-Schedules Test.pdf">View Unschedule Plan</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button onclick="document.getElementById('id02').style.display='block';  $('#myModal3').modal('hide')"
                                    style="width:auto;" class="btn-log">Enroll Now</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>




            <div class="col-sm-12 col-lg-3 card-column p-5 text-center">


                <h6 class="course-text">CA IPCC </h6>
                <br>
                <a href="#plan_detials"> <button class="btn btn-primary">Details</button></a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">
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

                                            <td><a href="CA Final Old Scheduled Test.pdf">View Schedule Plan</a> <br> <a
                                                    href="CA Final Old Un-Schedules Test.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="CA Final Old Scheduled Test.pdf">View Schedule Plan</a> <br> <a
                                                    href="CA Final Old Un-Schedules Test.pdf">View Unschedule Plan</a> </td>
                                            <td><a href="CA Final Old Scheduled Test.pdf">View Schedule Plan</a> <br> <a
                                                    href="CA Final Old Un-Schedules Test.pdf">View Unschedule Plan</a> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button onclick="document.getElementById('id02').style.display='block';  $('#myModal4').modal('hide')"
                                    style="width:auto;" class="btn-log">Enroll Now</button>
                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <h1 class="text-center mb-5 font-weight-bold text-heading">Why CA Club Test Series</h1>
    <table class="table table-bordered table-responsive ">
        <thead>
            <tr>
                <th>Particulars
                </th>
                <th>No Test Series
                </th>
                <th>Ordinary Test Series
                </th>
                <th>CA CLUB Test Series
                </th>
            </tr>



        </thead>
        <tbody>
            <tr>
                <td>Test Paper
                </td>
                <td>*
                </td>
                <td>Predicatable
                </td>
                <td>New variety of questions based on ICAI pattern
                </td>
            </tr>
            <tr>
                <td>Evaluation
                </td>
                <td>*
                </td>
                <td>4-5 Days
                </td>
                <td>With in 48hr of test conducted
                </td>
            </tr>
            <tr>
                <td>Counselling
                </td>
                <td>*
                </td>
                <td> </td>
                <td>Get Expert guidance for concept clarity
                </td>
            </tr>

            <tr>
                <td>Detailed Analysis of Every Answer

                </td>
                <td>*
                </td>
                <td> </td>
                <td>Detailed analysis of every answer & comment on it by Experts
                </td>
            </tr>

            <tr>
                <td>Chapter wise and Full Syllabus Performance

                </td>
                <td>*
                </td>
                <td> </td>
                <td>Covers Step by Step Practice & gives complete preparedness for Exams
                </td>
            </tr>

            <tr>
                <td>Makers-Checkers Team

                </td>
                <td>*
                </td>
                <td>Any Other
                </td>
                <td>Most experienced team (Chartered Accountants only) for making & checking of test papers
                </td>
            </tr>
        </tbody>
    </table>

</div>
<div class="container-fluid mt-5 pt-5 pb-5 main_about_block">
    <div class="container">
        <h1 class="text-center font-weight-bold text-heading">ABOUT CA CLUB Test Series
        </h1>
        <div class="row ">
            <div class="col-2"></div>
            <div class="col-sm-12 col-md-8 col-lg-8 about-block">
                <ul>
                    <li> <i class="fas fa-angle-right"></i>CA CLUB Test Series is a pan India test series for CA
                        Exams
                    </li>
                    <li> <i class="fas fa-angle-right"></i>CA CLUB Test Series is the path from “Being in CA” to
                        “Being a CA”
                    </li>
                    <li> <i class="fas fa-angle-right"></i>CA CLUB Test Series aims to provide maximum benefits to
                        the students in terms of &nbsp;&nbsp;&nbsp;&nbsp; preparation and guidance
                    </li>
                    <li> <i class="fas fa-angle-right"></i>CA CLUB Test Series is conducting chapter wise and full
                        syllabus test series for CA final (new & &nbsp;&nbsp;&nbsp;&nbsp; old course) and CA
                        Intermediate (new & old course)
                    </li>
                    <li> <i class="fas fa-angle-right"></i>We have most experienced team (Chartered Accountants
                        only) for making & checking of test papers
                    </li>
                </ul>
            </div>
            <div class="col-2"></div>
        </div>

        <div class="row text-center">

            <div class="col-md-3">
                Timely revision of course
            </div>
            <div class="col-md-1">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </div>
            <div class="col-md-2">
                CA CLUB Test Series
            </div>
            <div class="col-md-1">
                <i class="fa fa-plus" aria-hidden="true"></i>
            </div>
            <div class="col-md-2">
                Proper Expert's guidance
            </div>
            <div class="col-md-1">
                <i class='fas fa-equals' style='font-size:20px'></i>
            </div>
            <div class="col-md-2">
                <div class="sucess font-weight-bold" style=" color:#f2aa4cff;">Key to success</div>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid mt-5" id="plan_detials">
    <div class="container">
        <h1 class=" text-center mb-5 font-weight-bold text-heading">PLAN DETAIL'S </h1>

        <div class="card-deck mt-5">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card card-plan  ">
                        <div class="card-body text-center">
                            <h4>Step By Step Test Series
                            </h4>
                            <ul>
                                <li>Part test series include 2 part tests along with two full syllabus test for each
                                    subject.
                                </li>

                                <li>Part Test helps in step by step practice for exams and helps to your weak area
                                    in detail while full syllabus test helps to identify the overall need.
                                </li>
                                <li>Helps in identifying Knowledge gaps of each Step.
                                </li>
                                <li>Total 32 test (4*8 subjects) for both groups.
                                </li><br>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card  card-plan  ">
                        <div class="card-body text-center">
                            <h4>DUO Test Series
                            </h4>
                            <ul>
                                <li>DUO test series include 2 Full syllabus tests for each subject
                                </li>
                                <li>DUO test series helps in cementing of knowledge.
                                </li>
                                <li>Ready to prepare Exams ‘s environment before your real ICAI exams.
                                </li>
                                <li>DUO test series prepares you for exam readiness.
                                </li>

                                <li>Total 16 tests (2*8 subjects) for both groups
                                </li>
                                <li>Full syllabus test of 3 Hrs. each.
                                </li><br>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="card  card-plan ">
                        <div class="card-body text-center">
                            <h4>SOLO Test Series
                            </h4>
                            <ul>
                                <li>SOLO test series includes 1 full syllabus test of each subject.
                                </li>
                                <li>SOLO test series helps in identifying the weak areas in first attempt.
                                </li>
                                <li>Ready to prepare Exams ‘s environment before your real ICAI exams.
                                </li>
                                <li>SOLO test series can reduce exam anxiety.
                                </li>
                                <li>Total 8 test (1*8 subjects) for both groups.
                                </li>
                                <li>SOLO test series include full syllabus test of 3 Hrs. each.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5 pt-5 pb-5 main_howwork_block">
    <div class="container">
        <h1 class=" text-center mb-5 font-weight-bold text-heading">HOW IT WORKS</h1>
        <div class="row ">
            <div class="col-2"></div>
            <div class="col-sm-12 col-md-8 col-lg-8 howwork-block">
                <ul style="list-style-type:none;">
                    <li> <i class="fas fa-angle-right"></i>Register for CA CLUB Test Series

                    </li>
                    <li> <i class="fas fa-angle-right"></i>Download the test paper/question paper from your login or
                        registered email id.

                    </li>
                    <li> <i class="fas fa-angle-right"></i>Answers to be written on notebook

                    </li>
                    <li> <i class="fas fa-angle-right"></i>Click photo or scan the pages serial wise

                    </li>
                    <li> <i class="fas fa-angle-right"></i>Upload the sheets as pdf in your login or mail to us

                    </li>

                    <li> <i class="fas fa-angle-right"></i>Get checked answer sheets with in 48 hrs. of test
                        conducted along with expert’s reviews


                    </li>

                </ul>
            </div>
            <div class="col-2"></div>
        </div>

        <div class="row   pt-3  ">
            <div class="col-1"></div>
            <div class="col-sm-12 col-md-10 col-lg-10">
                <p class="text-light"> <strong style="  color:#f2aa4cff;"> Note: </strong>
                    <ul>
                        <li> <strong style="  color:#f2aa4cff;">Unscheduled Test:</strong> Students can appear test
                            as per their preparation as & when convenient to them.
                        </li>
                        <li> <strong style="  color:#f2aa4cff;"> Scheduled Test:</strong> Students can appear test
                            as per our Expert guided schedule. For CA final new syllabus, test series would be
                            available only for 7 subjects. (Elective subject is not included in the test series)
                        </li>
                    </ul>
                </p>
            </div>
            <div class="col-1"></div>
        </div>
    </div>
</div>
<div class="container-fluid " id="contact">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="main-from   p-5 pb-5  w-100   ">
                    <h1 class="  text-center mb-5 text-light font-weight-bold text-heading">Contact Us</h1>
                    <h2 class="text-light text-center">Have Some Queries ?</h2>
                    <form class="pt-5">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6 mt-3 ">
                                <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                    name="name">
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6 mt-3 ">
                                <input type="text" class="form-control" placeholder="Enter Mobile.No" name="mob">
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 mt-3  ">
                                <input type="text" class="form-control" id="email" placeholder="Enter Email"
                                    name="email">
                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-12 mt-3 ">
                                <textarea class="form-control" name="" id="" rows="3"
                                    placeholder="Your massage"></textarea>
                            </div>
                            <button class="btn mt-2 send-btn ">SEND</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>

@endsection

@section('customjs')
@endsection