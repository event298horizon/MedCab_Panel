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

class LabController extends Controller
{
    public function LabDashboard(){

        $user_id = session('user_id');
        
        $lab_data = DB::table('lab_owner')
        ->leftjoin('lab','lab.lab_owner_by','=','lab_owner.lab_owner_id')
        ->where('lab_owner.lab_owner_id',$user_id)
        ->first();

        return view('lab_page.lab_dahboard',compact('lab_data'));
    }

    public function add_lab(){
        return view('lab_page.add_lab');
    }

    public function Save_lab(Request $request){
        $validatedData = $request->validate([
            'lab_contact_no' => 'required',
            'lab_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
            // Add more validation rules for other fields here
        ]);
    
        $lab_contact_no = $validatedData['lab_contact_no'];
    
        // Check if the mobile number already exists
        $existingLab = DB::table('lab')
            ->where('lab_contact_no', $lab_contact_no)
            ->first();
    
        if ($existingLab) {
            return redirect()->back()->with('error', 'Your Lab already exists');
        }
    
        // Retrieve the city_id
        $lab_city = $request->input('lab_city');
        $city_id = DB::table('city')
            ->where('city_name', $lab_city)
            ->value('city_id');
    
        // Retrieve the lab owner from the session
        $lab_owner = $request->input('lab_owner_id');

        // Initialize lab_image
        if ($request->hasFile('lab_image')) {
            $profileImage = $request->file('lab_image');
            $lab_image = "assets/lab/" . 'lab_image_' . time() . '.' . $profileImage->getClientOriginalExtension();
            $profileImage->move(public_path('assets/lab'), $lab_image);
        }
        
        // Insert lab data
        $lab_user_id = DB::table('lab')->insertGetID([
            'lab_type' => $request->input('lab_type'),
            'lab_name' => $request->input('lab_name'),
            'lab_email' => $request->input('lab_email') ?? 'lab@example.com',
            'lab_city' => $city_id,
            'lab_added_date' => Carbon::now()->timestamp,
            'lab_status' => 0,
            'lab_service_status' => $request->input('lab_service_status'),
            'lab_details' => $request->input('lab_details'),
            'lab_pincode' => $request->input('lab_pincode'),
            'lab_address' => $request->input('lab_address'),
            'lab_lat' => $request->input('lab_lat'),
            'lab_long' => $request->input('lab_long'),
            'lab_contact_no' => $lab_contact_no,
            'lab_owner_by' => $lab_owner,
            'lab_image' => $lab_image, // Assign the image path here
        ]);

        if ($lab_user_id) {
            // Update lab owner status
            $update_status = DB::table('lab_owner')
                ->where('lab_owner_id', $lab_owner)
                ->update(['lab_owner_status' => 3]);
        
            if ($update_status) {
                return redirect()->route('add_basic_details')->with('success', 'Lab added successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
        
    }

    public function LabBasicDeatails(){
        return view('lab_page.add_basic_details');
    }

    public function Save_basic_details(Request $request)
    {
        $validatedData = $request->validate([
            'lab_licence_certificate_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'mci_certicate_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
            // Add more validation rules for other fields here
        ]);
        
        // Retrieve the lab owner from the session
        $lab_owner = $request->input('lab_owner_id');

        // Initialize lab_image
        if ($request->hasFile('lab_licence_certificate_photo')) {
            $profileImage = $request->file('lab_licence_certificate_photo');
            $lab_licence_certificate_photo = "assets/lab_basic_details/" . 'lab_licence_certificate' . time() . '.' . $profileImage->getClientOriginalExtension();
            $profileImage->move(public_path('assets/lab_basic_details'), $lab_licence_certificate_photo);
        }

        if ($request->hasFile('mci_certicate_photo')) {
            $profileImage = $request->file('mci_certicate_photo');
            $mci_certicate_photo = "assets/lab_basic_details/" . 'mci_certicate' . time() . '.' . $profileImage->getClientOriginalExtension();
            $profileImage->move(public_path('assets/lab_basic_details'), $mci_certicate_photo);
        }
        
        // Insert lab data
        $lab_user_id = DB::table('lab_certificate_details')->insertGetID([
            'lab_certificate_owner_id' => $lab_owner,
            'lab_licence_no' => $request->input('lab_licence_no'),
            'lab_owner_name' => $request->input('lab_owner_name'),
            'pathologist_name' => $request->input('pathologist_name'),
            'lab_licence_certificate_photo' => $lab_licence_certificate_photo, // Assign the image path here
            'mci_certicate_photo' => $mci_certicate_photo, // Assign the image path here
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        if ($lab_user_id) {
            // Update lab owner status
            $update_status = DB::table('lab_owner')
                ->where('lab_owner_id', $lab_owner)
                ->update(['lab_owner_status' => 4]);
    
            if ($update_status) {
                return redirect()->route('add_bank_details')->with('success', 'Your Basic Details added successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function LabBankDeatails(){
        return view('lab_page.add_bank_details');
    }

    public function savelabBankData(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'cancel_check_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add more validation rules for other fields here
        ]);
        
        // Retrieve the lab owner from the session
        $lab_owner = $request->input('lab_owner_id');

        // Initialize lab_image
        if ($request->hasFile('cancel_check_image')) {
            $profileImage = $request->file('cancel_check_image');
            $cancel_check_image = "assets/lab_bank_details/" . 'cancel_check_image' . time() . '.' . $profileImage->getClientOriginalExtension();
            $profileImage->move(public_path('assets/lab_bank_details'), $cancel_check_image);
        }

        // Insert lab data
        $lab_user_id = DB::table('lab_bank_details')->insertGetID([
            'lab_owner_id' => $lab_owner,
            'account_holder_name' => $request->input('account_holder_name'),
            'account_no' => $request->input('account_no'),
            'cancel_check_image' => $cancel_check_image, // Assign the image path here
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);

        if ($lab_user_id) {
            // Update lab owner status
            $update_status = DB::table('lab_owner')
                ->where('lab_owner_id', $lab_owner)
                ->update(['lab_owner_status' => 5]);
    
            if ($update_status) {
                return redirect()->route('lab_dashboard')->with('success', 'Your Bank Details added successfully');
            } else {
                return redirect()->back()->with('error', 'Something went wrong');
            }
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    public function EditLabPage($lab_id){
        $lab_data = DB::table('lab')
        ->leftjoin('city','city.city_id','=','lab.lab_city')
        ->leftjoin('state','state.state_id','=','city.city_state')
        ->where('lab_id',$lab_id)
        ->first();

        return view('lab_page.edit_lab',compact('lab_data'));
    }

    public function verifyLab(Request $request)
    {
        $ownerId = $request->input('owner_id');
        // For example, update the lab owner's status to 'verified'
        DB::table('lab_owner')
            ->where('lab_owner_id', $ownerId)
            ->update(['lab_owner_status' => '6']);

        // You can return a response if needed
        return response()->json(['message' => 'Lab owner verified apply successfully']);
    }
}
