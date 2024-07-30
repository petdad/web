<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\VaccineLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class VaccinLogController extends Controller
{


    public function store(Request $request)
    {
        // if(env('IS_DEMO', false)){
        //     return;
        // }

        VaccineLog::create([
            'pet_id' => $request->petId,
            'vaccine_name' => $request->vaccine_name,
            'administered_at' => $request->administered_at
        ]);
    }



}
