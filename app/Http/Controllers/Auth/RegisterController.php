<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\ReferralCode;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $referral = ReferralCode::where('referral_code', $data['referral_code'])->first();
        if (!empty($referral)) {
            $referralCode = $data['referral_code'];
        } else {
            $referralCode = '';
        }
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'mobile_no' => $data['mobile_no'],
            'icai_no' => $data['icai_no'],
            'referral_code' => $referralCode,
        ]);
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
