<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use Illuminate\Validation\Factory; 
use App\Models\verification_otp; 
use Validator;
use Input;
use Session;
use Carbon\Carbon;
use Auth;

class PathologyAuthController  extends Controller
{
    public function registerstore(Request $request){
        $lab_owner_mobile_number = $request->input('lab_owner_mobile_number');

        // Check if the mobile number already exists in the 'lab_owner' table
        $check_mobile = DB::table('lab_owner')
            ->where('lab_owner_mobile_number', $lab_owner_mobile_number)
            ->first();
        
        if ($check_mobile) {
            return redirect()->back()->with('error', 'Mobile number is already in use');
        }
        
        // Retrieve city_id using the city_name from the request
        $lab_owner_city_name = $request->input('lab_owner_city_name');
        $city_id = DB::table('city')
            ->where('city_name', '=', $lab_owner_city_name)
            ->value('city_id');
        
        // Handle Lab Owner Profile Image
              $lab_owener_profile = '';

                if ($request->hasFile('lab_owener_profile')) {
                    $profileImage = $request->file('lab_owener_profile');
                    $lab_owener_profile = "assets/lab_owner/" . time() . '.' . $profileImage->getClientOriginalExtension();
                    $profileImage->move(public_path('assets/lab_owner'), $lab_owener_profile);
               }
        
        // Insert Lab Owner Data using DB facade
        $lab_owner = DB::table('lab_owner')->insertGetId([
            'lab_owner_name' => $request->input('lab_owner_name'),
            'lab_owner_mobile_number' => $lab_owner_mobile_number,
            'lab_owner_email' => $request->input('lab_owner_email'),
            'lab_owner_city_name' => $city_id, // Use 'lab_owner_city_id' to store the city_id
            'lab_added_refferal_id' => $request->input('lab_added_refferal_id'),
            'lab_owner_added_time' => time(),
            'lab_owner_status' => 0,
            'lab_owener_profile' => $lab_owener_profile ?? '',
        ]);
        
       
        $mobile = $request->input('lab_owner_mobile_number');
        $auth_key_fcm = $request->input('auth_key');

        $data = DB::table('lab_owner')->where('lab_owner_mobile_number', $mobile)->get();

        $otp = $data_list['otp'] = "".rand(1111, 9999);

        if ($mobile == '9455070226') {
            $otp = $data_list['otp'] = "1234";
        }

        $otp_status = 1;

        if ($otp_status == 1) { // Changed from "=" to "=="
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://control.msg91.com/api/v5/otp?template_id=643fde80d6fc0517dc4feab2&mobile=91'.$mobile.'&otp='.$otp.'&authkey=394219AXMGKO4O52Jt642fe133P1',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_HTTPHEADER => array(
                    'Cookie: PHPSESSID=88cmviqh9qcc0tcjlmg0qifka6'
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);

            $verification_otp = new verification_otp;

            $verification_otp->vfn_source = 'Lab Owner Website'; // 0 for new, 1 for active
            $verification_otp->vfn_consumer_mob_no = $mobile;
            $verification_otp->vfn_otp = $otp;
            $verification_otp->vfn_timestamp = time();
            $verification_otp->save();
        }

        // Move this part inside the if block
        $auth_key = $data_list['lab_owner_auth_key'] = $this->random_strings(10);

        $lab_owner_data = DB::table('lab_owner')
            ->where('lab_owner_mobile_number', $mobile)
            ->get();

        if (count($lab_owner_data) > 0) {
            $lab_owner_id = $lab_owner_data[0]->lab_owner_id;
            $lab_owner_mobile = $lab_owner_data[0]->lab_owner_mobile_number;

            // Store the data in the session
            session(['lab_owner_id' => $lab_owner_id, 'lab_owner_mobile' => $lab_owner_mobile]);
        }

        return redirect()->route('otp_pages')->with('success', 'Your data added successfully');
       
    }

    public function userLogin(Request $request)
    {
        $user_otp = $request->input('lab_owner_email');
        $user_data = $request->input('lab_owner_id');
    
        $check_exist_otp = DB::table('verification_otp')
            ->where('vfn_otp', $user_otp)
            ->get();
    
        if ($check_exist_otp->count() > 0) {
            $mobile_no = $check_exist_otp[0]->vfn_consumer_mob_no;
    
            $login_data = DB::table('lab_owner')
                ->where('lab_owner_mobile_number', '=', $mobile_no)
                ->get();
    
            if ($login_data->count() == 1) {
                // Assuming you have an 'lab_owner_email' field
                $user_name = $login_data[0]->lab_owner_name;
                $usermobile = $login_data[0]->lab_owner_mobile_number;
    
                // Using the correct method to set session variables
                Session::put(['user_id' => $login_data[0]->lab_owner_id, 'usermobile' => $usermobile, 'user_name' => $user_name]);
    
                $check_add_lab = DB::table('lab')
                    ->where('lab_owner_by', $user_data)
                    ->get();
    
                if (count($check_add_lab) > 0) {
                    return redirect()->route('pathology_dashboard')->with('success', 'Login successful.');
                } else {
                    $update_status = DB::table('lab_owner')
                        ->where('lab_owner_id', $user_data)
                        ->update(['lab_owner_status' => '2']);
    
                    return redirect()->route('add_lab')->with('success', 'Login successful.');
                }
            }
        } else {
            $update_status = DB::table('lab_owner')
                ->where('lab_owner_id', $user_data)
                ->update(['lab_owner_status' => '1']);
    
            return redirect()->route('user_login')->with('error', 'Please Enter Your Correct Otp Number.');
        }
    }
    


    public function autocomplete(Request $request)
    {
        $query = $request->input('query');
    
        $cities = DB::table('city')
        ->leftjoin('state','state.state_id','=','city.city_state')
            ->select("city.city_name", "city.city_id","state.state_name")
            ->where('city_name', 'LIKE', "%{$query}%")
            ->get();
    
        $formattedCities = [];
        foreach ($cities as $city) {
            $formattedCities[] = $city->city_name . ' (' . $city->state_name . ')';
        }
    
        return response()->json($formattedCities);
    }

    function random_strings($length_of_string)
    {
        // String of all alphanumeric character
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($str_result),
                        0, $length_of_string);
    }
    public function otp_pages(){

         $lab_owner_id = session('lab_owner_id');
        $lab_owner_mobile = session('lab_owner_mobile');

        return view('user_otp',compact('lab_owner_id','lab_owner_mobile'));
    }

    public function LogOut()
    {
        return redirect('user_login')->with(Auth::logout());
    }

    public function UserOtp(Request $request) {
        // Retrieve the input values from the request
     $mobile = $request->input('mobile');
     $auth_key_fcm = $request->input('auth_key');
 
     // Check if a record with the provided mobile number exists in the 'lab_owner' table
     $check_exist_owner = DB::table('lab_owner')
         ->where('lab_owner_mobile_number', $mobile)
         ->first(); // Use first() to get a single record, if it exists
 
     if (!$check_exist_owner) {
         // You can use route() to specify the route by name and pass parameters in an array
         session(['mobile' => $mobile]);
         return redirect()->route('register')
             ->with('error', 'Please Register Your Account.');
     }
 
     
         $data = DB::table('lab_owner')->where('lab_owner_mobile_number', $mobile)->get();
     
         $otp = $data_list['otp'] = "".rand(1111, 9999);
     
         if ($mobile == '9455070226') {
             $otp = $data_list['otp'] = "1234";
         }
     
         $otp_status = 1;
     
         if ($otp_status == 1) { // Changed from "=" to "=="
             $curl = curl_init();
     
             curl_setopt_array($curl, array(
                 CURLOPT_URL => 'https://control.msg91.com/api/v5/otp?template_id=643fde80d6fc0517dc4feab2&mobile=91'.$mobile.'&otp='.$otp.'&authkey=394219AXMGKO4O52Jt642fe133P1',
                 CURLOPT_RETURNTRANSFER => true,
                 CURLOPT_ENCODING => '',
                 CURLOPT_MAXREDIRS => 10,
                 CURLOPT_TIMEOUT => 0,
                 CURLOPT_FOLLOWLOCATION => true,
                 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                 CURLOPT_CUSTOMREQUEST => 'POST',
                 CURLOPT_HTTPHEADER => array(
                     'Cookie: PHPSESSID=88cmviqh9qcc0tcjlmg0qifka6'
                 ),
             ));
     
             $response = curl_exec($curl);
     
             curl_close($curl);
     
             $verification_otp = new verification_otp;
     
             $verification_otp->vfn_source = 'Lab Owner Website'; // 0 for new, 1 for active
             $verification_otp->vfn_consumer_mob_no = $mobile;
             $verification_otp->vfn_otp = $otp;
             $verification_otp->vfn_timestamp = time();
             $verification_otp->save();
         }
     
         // Move this part inside the if block
         $auth_key = $data_list['lab_owner_auth_key'] = $this->random_strings(10);
     
         $lab_owner_data = DB::table('lab_owner')
             ->where('lab_owner_mobile_number', $mobile)
             ->get();
     
         if (count($lab_owner_data) > 0) {
             $lab_owner_id = $lab_owner_data[0]->lab_owner_id;
             $lab_owner_mobile = $lab_owner_data[0]->lab_owner_mobile_number;
     
             // Store the data in the session
             session(['lab_owner_id' => $lab_owner_id, 'lab_owner_mobile' => $lab_owner_mobile]);
         }
     
        // Return a JSON response with the success message
         $message = "Otp Send Successfully";
         return redirect()->route('otp_pages')->with('success', $message);
 
     }

     
    public function ResendOtp(Request $request) {
        $mobile = $request->input('lab_owner_mobile');
        $auth_key_fcm = $request->input('auth_key');

        $check_exist_owner = DB::table('lab_owner')
        ->where('lab_owner_mobile_number', $mobile)
        ->first(); // Use first() to get a single record, if it exists
    
        $data = DB::table('lab_owner')->where('lab_owner_mobile_number', $mobile)->get();
    
        $otp = $data_list['otp'] = "".rand(1111, 9999);
    
        if ($mobile == '9455070226') {
            $otp = $data_list['otp'] = "1234";
        }
    
        $otp_status = 1;
    
        if ($otp_status == 1) { // Changed from "=" to "=="
            $curl = curl_init();
    
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://control.msg91.com/api/v5/otp?template_id=643fde80d6fc0517dc4feab2&mobile=91'.$mobile.'&otp='.$otp.'&authkey=394219AXMGKO4O52Jt642fe133P1',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_HTTPHEADER => array(
                    'Cookie: PHPSESSID=88cmviqh9qcc0tcjlmg0qifka6'
                ),
            ));
    
            $response = curl_exec($curl);
    
            curl_close($curl);
    
            $verification_otp = new verification_otp;
    
            $verification_otp->vfn_source = 'Lab Owner Website'; // 0 for new, 1 for active
            $verification_otp->vfn_consumer_mob_no = $mobile;
            $verification_otp->vfn_otp = $otp;
            $verification_otp->vfn_timestamp = time();
            $verification_otp->save();
        }
    
        // Move this part inside the if block
        $auth_key = $data_list['lab_owner_auth_key'] = $this->random_strings(10);
    
        $lab_owner_data = DB::table('lab_owner')
            ->where('lab_owner_mobile_number', $mobile)
            ->get();
    
        if (count($lab_owner_data) > 0) {
            $lab_owner_id = $lab_owner_data[0]->lab_owner_id;
            $lab_owner_mobile = $lab_owner_data[0]->lab_owner_mobile_number;
    
            // Store the data in the session
            session(['lab_owner_id' => $lab_owner_id, 'lab_owner_mobile' => $lab_owner_mobile]);
        }
    
       // Return a JSON response with the success message
        $message = "Otp Resend Successfully";
        return redirect()->route('otp_pages')->with('success', $message);

    }

    public function add_lab(){
        return view('lab_page.add_lab');
    }

}
