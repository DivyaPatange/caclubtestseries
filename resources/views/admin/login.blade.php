<!DOCTYPE html>
<html lang="en">
<head>
    <title>CA Club Test Series | Admin Login</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    @include('admin.admin_layout.link')
    <style>
        .bg-page {
            background:#043248;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Admin Login</h2>
            <!--// main-heading -->
            <div class="row">
              <div class="col-md-6 mx-auto">
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
                <div class="col-md-6 mx-auto">
                    <div class="form-body-w3-agile mt-5">
                <form action="{{ route('admin.login.submit') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" name="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password" name="password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-sm-flex justify-content-between">
                        <div class="form-check col-md-6 text-sm-left text-center">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <div class="forgot col-md-6 text-sm-right text-center">
                            <!--<a href="">forgot password?</a>-->
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4" name="submit">Login</button>
                    </div>
                </form>
            </div>
                </div>
                </div>
        </div>
    </div>
    @include('admin.admin_layout.script')
</body>
</html>