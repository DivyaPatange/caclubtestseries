@extends('admin.admin_layout.main')
@section('title', 'Add User')
@section('customcss')

@endsection
@section('content')
<!-- Simple-chart -->
<div class="outer-w3-agile mt-3">
    <form action="" method="post">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" placeholder="Enter username" name="username" required> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" placeholder="Enter your email" name="email" required> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" placeholder="Re-enter your password" name="cpassword" required>
                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary error-w3l-btn px-4" name="submit">Submit</button>
            </div>
        </div>
    </form>             
</div>
<!--// Simple-chart -->
@endsection
@section('customjs')

@endsection