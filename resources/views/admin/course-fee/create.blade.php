@extends('admin.admin_layout.main')
@section('title', 'Add Course Fee')
@section('customcss')

@endsection
@section('content')
<!-- Simple-chart -->
<div class="outer-w3-agile mt-3">
    <form action="{{ route('admin.course-fee.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-6">
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
            <div class="col-md-6">
                <div class="form-group">
                    <label>Test Series</label>
                    <select class="form-control @error('test_series') is-invalid @enderror" name="test_series">
                        <option value="">-Select-</option>
                        <option value="Step By Step">Step By Step</option>
                        <option value="Solo">Solo</option>
                        <option value="Duo">Duo</option>
                    </select> 
                    @error('test_series')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Group Name</label>
                    <select class="form-control @error('group_name') is-invalid @enderror" name="group_name">
                        <option value="">-Select-</option>
                        <option value="Group I">Group I</option>
                        <option value="Group II">Group II</option>
                        <option value="Both Group">Both Group</option>
                    </select>
                    @error('group_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror 
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Fee</label>
                    <input type="number" class="form-control @error('fees') is-invalid @enderror" name="fees">
                    @error('fees')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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