<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CA | User</title>
    
    @include('auth.links')
    
</head>
<body>
    <header>
        <div class="container-fluid container-main align-items-center">
            <nav class="navbar navbar-expand-lg  navbar-dark container-nav  ">
                <img src="img/logo1.png" alt="" width="10%;" class="logo-img">
                <a class="navbar-brand" href="{{ url('/') }}"> &nbsp;CA/CS Online Test Series </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end user_profile  " id="collapsibleNavbar">
                    <ul class="navbar-nav">                                                     
                        <li class="nav-item dropdown "  >
                            <a class="nav-link text-light" href="#" id="navbardrop" data-toggle="dropdown" style="display: flex;">
                                <i class="fas fa-user mr-2" style="font-size: 30px;"></i> <h4>{{ Auth::user()->name }}</h4>                                   
                            </a>
                            <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="logout.php">Log Out</a>
                            </div>
                        </li>
                    </ul>                                      
                </div>
            </nav>
        </div>
    </header>

<!-- Model -->
<div class="container-fluid  container-user " id="page-scroll">
    <div class="container main-container-card">
        <div class="row ">
            <div class="col-sm-12 col-lg-3 card-column p-5 text-center">
                <h6 class="course-text">CA Final (New Course)</h6>
                <br>
                <a href="#plan_detials"> <button class="btn btn-primary">Details</button></a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
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
                                <button onclick="document.getElementById('id03').style.display='block'"
                                    style="width:auto;" class="btn-log">Payment</button>

                                <div id="id03" class="modal_reg">

                                    <form class="modal_content_reg animate" action="newc.php" method="post" enctype="multipart/form-data">
                                        <div class="imgcontainer">
                                            <span onclick="document.getElementById('id03').style.display='none'"
                                                class="close" title="Close Modal">&times;</span>
                                            <img src="img/barcode.jpg" alt="Barcode" style="width:23%;">
                                            <p class="mt-2 mb-2 text-dark">Scan this barcode and make payment. After payment successful upload receipt.</p>
                                        </div>

                                        <div class="container pb-3">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="uname"><b>Name</b></label>
                                                    <input type="text" placeholder="Enter Name" name="name"
                                                        required>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="email"><b>Email</b></label>
                                                    <input type="text" placeholder="Enter Email" name="email"
                                                        required>
                                                </div>
                                                
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="mob"><b> Mobile No.</b></label>
                                                    <input type="text" placeholder="Enter Mobile.No" name="mob"
                                                        required>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="exampleFormControlSelect1" class="mt-2">CA Final ( New Course)</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="course">
                                                        <option selected>Select test series</option>
                                                        <option value="Step By Step Test Series" name="course">Step By Step Test Series</option>
                                                        <option value="Solo Test series" name="course">Solo Test series</option>
                                                        <option value="Duo Test series" name="course">Duo Test Series</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="subject"><b>Group</b></label>
                                                    <input type="text" placeholder="Enter test series subject" name="subject"
                                                        required>
                                                </div>

                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="fileToUpload">Upload receipt</label>
                                                    <input type="file" class="form-control-file text-dark" id="fileToUpload" name="fileToUpload">
                                                </div>


                                            </div>
                                            <button type="submit" class="btn-log" name="upload">Upload</button>
                                        </div>


                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-lg-3 card-column p-5 text-center">



                <h6 class="course-text">CA Final (Old Course)</h6>
                <br>
                <a href="#plan_detials"> <button class="btn btn-primary">Details</button></a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModa2">
                    See Plan
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModa2">
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
                                <button onclick="document.getElementById('id04').style.display='block'"
                                    style="width:auto;" class="btn-log">Payment</button>

                                <div id="id04" class="modal_reg">

                                    <form class="modal_content_reg animate" action="oldc.php" method="post" enctype="multipart/form-data">
                                        <div class="imgcontainer">
                                            <span onclick="document.getElementById('id04').style.display='none'"
                                                class="close" title="Close Modal">&times;</span>
                                            <img src="img/barcode.jpg" alt="Barcode" style="width:23%;">
                                            <p class="mt-2 mb-2 text-dark">Scan this barcode and make payment. After payment successful upload receipt.</p>
                                        </div>

                                        <div class="container pb-3">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="uname"><b>Name</b></label>
                                                    <input type="text" placeholder="Enter Name" name="name"
                                                        required>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="email"><b>Email</b></label>
                                                    <input type="text" placeholder="Enter Email" name="email"
                                                        required>
                                                </div>
                                                
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="mob"><b> Mobile No.</b></label>
                                                    <input type="text" placeholder="Enter Mobile.No" name="mob"
                                                        required>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="exampleFormControlSelect1" class="mt-2">CA Final (Old Course)</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="course">
                                                        <option selected>Select test series</option>
                                                        <option value="Step By Step Test Series" name="course">Step By Step Test Series</option>
                                                        <option value="Solo Test series" name="course">Solo Test series</option>
                                                        <option value="Duo Test series" name="course">Duo Test Series</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="subject"><b>Group</b></label>
                                                    <input type="text" placeholder="Enter test series subject" name="subject"
                                                        required>
                                                </div>

                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="exampleFormControlFile1">Upload receipt</label>
                                                    <input type="file" class="form-control-file text-dark" id="exampleFormControlFile1" name="fileToUpload">
                                                </div>


                                            </div>
                                            <button type="submit" class="btn-log" name="upload">Upload</button>
                                        </div>


                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>


            <div class="col-sm-12 col-lg-3 card-column p-5 text-center">


                <h6 class="course-text"> CA Intermediate</h6>
                <br>
                <a href="#plan_detials"> <button class="btn btn-primary">Details</button></a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModa3">
                    See Plan
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModa3">
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
                                <button onclick="document.getElementById('id05').style.display='block'"
                                    style="width:auto;" class="btn-log">Payment</button>

                                <div id="id05" class="modal_reg">

                                    <form class="modal_content_reg animate" action="inter.php" method="post" enctype="multipart/form-data">
                                        <div class="imgcontainer">
                                            <span onclick="document.getElementById('id05').style.display='none'"
                                                class="close" title="Close Modal">&times;</span>
                                            <img src="img/barcode.jpg" alt="Barcode" style="width:23%;">
                                            <p class="mt-2 mb-2 text-dark">Scan this barcode and make payment. After payment successful upload receipt.</p>
                                        </div>

                                        <div class="container pb-3">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="uname"><b>Name</b></label>
                                                    <input type="text" placeholder="Enter Name" name="name"
                                                        required>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="email"><b>Email</b></label>
                                                    <input type="text" placeholder="Enter Email" name="email"
                                                        required>
                                                </div>
                                                
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="mob"><b> Mobile No.</b></label>
                                                    <input type="text" placeholder="Enter Mobile.No" name="mob"
                                                        required>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="exampleFormControlSelect1" class="mt-2">CA Intermediate</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="course">
                                                        <option selected>Select test series</option>
                                                        <option value="Step By Step Test Series" name="course">Step By Step Test Series</option>
                                                        <option value="Solo Test series" name="course">Solo Test series</option>
                                                        <option value="Duo Test series" name="course">Duo Test Series</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="subject"><b>Group</b></label>
                                                    <input type="text" placeholder="Enter test series subject" name="subject"
                                                        required>
                                                </div>

                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="exampleFormControlFile1">Upload receipt</label>
                                                    <input type="file" class="form-control-file text-dark" id="exampleFormControlFile1" name="fileToUpload">
                                                </div>


                                            </div>
                                            <button type="submit" class="btn-log" name="upload">Upload</button>
                                        </div>


                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>




            <div class="col-sm-12 col-lg-3 card-column p-5 text-center">


                <h6 class="course-text">CA IPCC </h6>
                <br>
                <a href="#plan_detials"> <button class="btn btn-primary">Details</button></a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModa4">
                    See Plan
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModa4">
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
                                <button onclick="document.getElementById('id06').style.display='block'"
                                    style="width:auto;" class="btn-log">Payment</button>

                                <div id="id06" class="modal_reg">

                                    <form class="modal_content_reg animate" action="ipcc.php" method="post" enctype="multipart/form-data">
                                        <div class="imgcontainer">
                                            <span onclick="document.getElementById('id06').style.display='none'"
                                                class="close" title="Close Modal">&times;</span>
                                            <img src="img/barcode.jpg" alt="Barcode" style="width:23%;">
                                            <p class="mt-2 mb-2 text-dark">Scan this barcode and make payment. After payment successful upload receipt.</p>
                                        </div>

                                        <div class="container pb-3">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="uname"><b>Name</b></label>
                                                    <input type="text" placeholder="Enter Name" name="name"
                                                        required>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="email"><b>Email</b></label>
                                                    <input type="text" placeholder="Enter Email" name="email"
                                                        required>
                                                </div>
                                                
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="mob"><b> Mobile No.</b></label>
                                                    <input type="text" placeholder="Enter Mobile.No" name="mob"
                                                        required>
                                                </div>
                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="exampleFormControlSelect1" class="mt-2">CA IPCC</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="course">
                                                        <option selected>Select test series</option>
                                                        <option value="Step By Step Test Series" name="course">Step By Step Test Series</option>
                                                        <option value="Solo Test series" name="course">Solo Test series</option>
                                                        <option value="Duo Test series" name="course">Duo Test Series</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="subject"><b>Group</b></label>
                                                    <input type="text" placeholder="Enter test series subject" name="subject"
                                                        required>
                                                </div>

                                                <div class="col-sm-12 col-md-6 col-lg-">
                                                    <label for="exampleFormControlFile1">Upload receipt</label>
                                                    <input type="file" class="form-control-file text-dark" id="exampleFormControlFile1" name="fileToUpload">
                                                </div>


                                            </div>
                                            <button type="submit" class="btn-log" name="upload">Upload</button>
                                        </div>


                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>
</div>
@include('auth.footer')  
</body>
</html>