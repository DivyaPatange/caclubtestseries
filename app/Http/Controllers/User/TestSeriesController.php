<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fee;
use Auth;
use App\Models\TestPayment;
use App\Models\AnswerSheet;
use App\Models\ReferralCode;

class TestSeriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function storePaymentDetails(Request $request) 
    {
        $testPayment = new TestPayment();
        $testPayment->user_id = Auth::user()->id;
        $testPayment->name = $request->name;
        $testPayment->email = $request->email;
        $testPayment->mobile_no = $request->mobile_no;
        $testPayment->course_name = $request->course_name;
        $testPayment->test_series = $request->test_series;
        $testPayment->group = $request->group_name;
        $testPayment->amount = $request->pay_amount;
        $image = $request->file('image');
        if($image != '')
        {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('PaymentScreenshot'), $image_name);
        }
        $testPayment->image = $image_name;
        $testPayment->save();
        return redirect('/home')->with('success', 'Payment is successfully done.');
    }

    public function searchPaymentAmount(Request $request)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $fee = Fee::where('course', $request->course_name)->where('group_name', $request->group_name)->where('test_series', $request->test_series)->first();
        // dd($user->referral_code !== '');
        $referralCode = $request->referral_code;
        $referral = ReferralCode::where('referral_code', $referralCode)->first();
        if(!empty($referral)) {
            if(!empty($fee)) {
                $data = $fee->reduced_fee;
            } else {
                $data = '';
            }
        } else {
            if(!empty($fee)) {
                $data = $fee->fees;
            } else {
                $data = '';
            }
        }
        return $data;
    }

    public function searchApproval(Request $request)
    {
        $testPayment = TestPayment::where('name', $request->name)->where('email', $request->email)->first();
        if(empty($testPayment)) {
            return 'Student does not exist with this name & email';
        } elseif ( $testPayment->status === null) {
            return 'Please click on approve button to take test';
        } 
    }

    public function approve(Request $request)
    {
        $testPayment = TestPayment::where('name', $request->name)->where('email', $request->email)->first();
        if(empty($testPayment)) {
            return redirect('/home')->with('danger', 'Student does not exist with this name & email');
        } else {
            $testPayment->status = "approved";
            $testPayment->save();
            return redirect('/home')->with('success', 'Test approved successfully!');
        }
    }

    public function submitAnswerSheet(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'file' => 'required',
        ]);
        $answer = new AnswerSheet();
        $answer->user_id = Auth::user()->id;
        $answer->course_name = $request->course_name;
        $answer->name = $request->name;
        $image = $request->file('file');
        if($image != '')
        {
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('AnswerSheet'), $image_name);
        }
        $answer->file = $image_name;
        $answer->save();
        return redirect('/home')->with('success', 'Answersheet uploaded successfully!');
    }
    
    public function searchReferralCode(Request $request) 
    {
        if($request->ajax()) {
            $referralCode = $request->referral_code;
            $referral = ReferralCode::where('referral_code', $referralCode)->get();
            $output = '';
            if (count($referral)>0) {
                // concatenate output to the array
                // loop through the result array
                foreach ($referral as $row)
                {
                    if($referralCode == $row->referral_code){
                        $output = ['success' => 'Referral code exists'];
                    }
                }
                // end of output
            }
            
            else {
                // if there's no matching results according to the input
                $output = ['error' => "Referral code doesn't exists"];
            }
            return $output;
        }
    }
}
