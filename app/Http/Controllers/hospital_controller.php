<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class hospital_controller extends Controller
{
    // saurabh
    public function hospital_services() {
        $get_data = DB::table('hospital_service_category')
            ->get();

        return view('facilities',compact('get_data'));
    }
    
    public function hospital_list() {
        $hospital_data = DB::table('hospital_lists')
        ->get();

        return view('hospital_details', compact('$hospital'));
    }
}
