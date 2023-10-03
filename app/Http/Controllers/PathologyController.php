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

class PathologyController extends Controller
{
    public function pathologyDashboard()
    {
        $customer_lab_order = DB::table('customer_lab_order')
            ->leftJoin('lab', 'lab.lab_city', '=', 'customer_lab_order.clo_address_city_id')
            ->leftJoin('customer_lab_order_test', 'customer_lab_order_test.clot_order_id', '=', 'customer_lab_order.customer_lab_order_id')
            ->leftJoin('lab_test', 'lab_test.lab_test_id', '=', 'customer_lab_order_test.clot_test_id')
            ->get();

        $patient_name = DB::table('customer_lab_patient')
            ->leftJoin('customer_lab_order', 'customer_lab_order.customer_lab_order_id', '=', 'customer_lab_patient.clp_lab_order_id')
            ->leftJoin('customer_lab_order_test', 'customer_lab_order_test.clot_order_id', '=', 'customer_lab_patient.clp_lab_order_id')
            ->leftJoin('customer_lab_order_time_slot', 'customer_lab_order_time_slot.clots_lab_order_id', '=', 'customer_lab_patient.clp_lab_order_id')
            ->leftJoin('lab_test', 'lab_test.lab_test_id', '=', 'customer_lab_order_test.clot_test_id')
            ->paginate(10);


        // dd($links);


        // dd($patient_name);

        return view('pathology_dashboard', compact('customer_lab_order', 'patient_name'));
    }



    public function add_lab()
    {
        return view('lab_page.add_lab');
    }
}
