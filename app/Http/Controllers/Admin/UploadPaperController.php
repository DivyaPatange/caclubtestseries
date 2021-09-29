<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UploadPaper;
use App\Models\TestPayment;

class UploadPaperController extends Controller
{
    public function index()
    {
        $papers = UploadPaper::all();
        $users = TestPayment::where('status', 'approved')->get();
        if(request()->ajax()) {
            return datatables()->of($papers)
            ->addColumn('user_id', function($row) {
                $testPayment = TestPayment::where('user_id', $row->user_id)->first();
                if(!empty($testPayment)) {
                    return $testPayment->name;
                }
            })
            ->addColumn('file', function($row) {
                $imagePath = asset('Papers/'.$row->file);
                return '<a href="'.$imagePath.'" target="_blank" class="btn btn-warning text-white px-2 py-1"><i class="fa fa-file"></i></a>';
            })
            ->addColumn('action', function($row) {
                return '<button data-id="'.$row->id.'" class="btn btn-danger delete">Delete</button>';
            })
            ->rawColumns(['action', 'file'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('admin.uploadPaper.index', compact('users'));
    }

    public function getCourseName(Request $request)
    {
        $testPayment = TestPayment::where('user_id', $request->user_id)->first();
        if(!empty($testPayment)) {
            return $testPayment->course_name;
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'file' => 'required',
        ]);
        $uploadPaper = new UploadPaper();
        $uploadPaper->user_id = $request->user_name;
        $uploadPaper->course = $request->course_name;
        $image = $request->file('file');
        if($image != '')
        {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('Papers'), $image_name);
        }
        $uploadPaper->file = $image_name;
        $uploadPaper->save();
        return redirect('/admin/upload-paper')->with('success', 'Paper Uploaded Successfully!');
    }

    public function destroy($id){
        $paper = UploadPaper::findorfail($id);
        if($paper->file){
            unlink(public_path('Papers/'.$paper->file));
        }
        $paper->delete();
        return response()->json(['success' => 'Paper Deleted Successfully!']);
    }

}
