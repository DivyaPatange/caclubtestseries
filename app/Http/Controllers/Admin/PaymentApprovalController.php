<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TestPayment;

class PaymentApprovalController extends Controller
{
    public function caFinalNewCoursePayment() {
        $newCourse = TestPayment::where('course_name', 'CA Final (New Course)')->get();
        if(request()->ajax()) {
            return datatables()->of($newCourse)
            ->addColumn('image', function($row) {
                $imagePath = asset('PaymentScreenshot/'.$row->image);
                return '<img src="'.$imagePath.'" width="25%">';
            })
            ->addColumn('status', function($row) {
                if($row->status === 'approved') {
                    return '<span class="badge badge-success text-white p-2">Approved</span>';
                } elseif($row->status === 'rejected') {
                    return '<span class="badge badge-danger text-white p-2">Rejected</span>';
                } else {
                    return '<span class="badge badge-warning text-white p-2">Pending</span>';
                }
            })
            ->addColumn('action', 'admin.paymentApproval.action')
            ->rawColumns(['action', 'image', 'status'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('admin.paymentApproval.new-course');
    }

    public function caFinalOldCoursePayment() {
        $newCourse = TestPayment::where('course_name', 'CA Final (Old Course)')->get();
        if(request()->ajax()) {
            return datatables()->of($newCourse)
            ->addColumn('image', function($row) {
                $imagePath = asset('PaymentScreenshot/'.$row->image);
                return '<img src="'.$imagePath.'" width="25%">';
            })
            ->addColumn('status', function($row) {
                if($row->status === 'approved') {
                    return '<span class="badge badge-success text-white p-2">Approved</span>';
                } elseif($row->status === 'rejected') {
                    return '<span class="badge badge-danger text-white p-2">Rejected</span>';
                } else {
                    return '<span class="badge badge-warning text-white p-2">Pending</span>';
                }
            })
            ->addColumn('action', 'admin.paymentApproval.action')
            ->rawColumns(['action', 'image', 'status'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('admin.paymentApproval.old-course');
    }

    public function caIntermediatePayment() {
        $newCourse = TestPayment::where('course_name', 'CA Intermediate')->get();
        if(request()->ajax()) {
            return datatables()->of($newCourse)
            ->addColumn('image', function($row) {
                $imagePath = asset('PaymentScreenshot/'.$row->image);
                return '<img src="'.$imagePath.'" width="25%">';
            })
            ->addColumn('status', function($row) {
                if($row->status === 'approved') {
                    return '<span class="badge badge-success text-white p-2">Approved</span>';
                } elseif($row->status === 'rejected') {
                    return '<span class="badge badge-danger text-white p-2">Rejected</span>';
                } else {
                    return '<span class="badge badge-warning text-white p-2">Pending</span>';
                }
            })
            ->addColumn('action', 'admin.paymentApproval.action')
            ->rawColumns(['action', 'image', 'status'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('admin.paymentApproval.intermediate');
    }

    public function caIPCCPayment() {
        $newCourse = TestPayment::where('course_name', 'CA IPCC')->get();
        if(request()->ajax()) {
            return datatables()->of($newCourse)
            ->addColumn('image', function($row) {
                $imagePath = asset('PaymentScreenshot/'.$row->image);
                return '<img src="'.$imagePath.'" width="25%">';
            })
            ->addColumn('status', function($row) {
                if($row->status === 'approved') {
                    return '<span class="badge badge-success text-white p-2">Approved</span>';
                } elseif($row->status === 'rejected') {
                    return '<span class="badge badge-danger text-white p-2">Rejected</span>';
                } else {
                    return '<span class="badge badge-warning text-white p-2">Pending</span>';
                }
            })
            ->addColumn('action', 'admin.paymentApproval.action')
            ->rawColumns(['action', 'image', 'status'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('admin.paymentApproval.ipcc');
    }

    public function approvePayment(Request $request)
    {
        $testPayment = TestPayment::findorfail($request->id);
        if($testPayment) {
            $result = TestPayment::whereId($request->id)->update(['status' => 'approved']);
            return response()->json(['success' => 'Registration Approved Successfully!']);
        } else {
            return response()->json(['error' => 'Registration not approved. Something went wrong!']);
        }
    }

    public function rejectPayment(Request $request)
    {
        $testPayment = TestPayment::findorfail($request->id);
        if($testPayment) {
            $result = TestPayment::whereId($request->id)->update(['status' => 'rejected']);
            return response()->json(['success' => 'Registration Rejected Successfully!']);
        } else {
            return response()->json(['error' => 'Registration not rejected. Something went wrong!']);
        }
    }
}
