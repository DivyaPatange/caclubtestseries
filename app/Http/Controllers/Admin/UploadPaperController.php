<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UploadPaper;

class UploadPaperController extends Controller
{
    public function index()
    {
        $papers = UploadPaper::all();
        if(request()->ajax()) {
            return datatables()->of($papers)
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
        return view('admin.uploadPaper.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'file' => 'required',
        ]);
        $uploadPaper = new UploadPaper();
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
