<?php

namespace App\Http\Controllers;


use App\Models\Controller;
use App\Models\ControllerDevice;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class DeviceController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): Response
    {
        return Inertia::render('Vet/Index',[
            "total_wireless" => ControllerDevice::where('user_id', Auth::id())->count(),
            "total_wired" => ControllerDevice::where('user_id', Auth::id())->count(),
        ]);
    }

    public function create(Request $request): Response
    {
        return Inertia::render('Pets/Create',[
        ]);
    }

    public function store(Request $request)
    {
        Pet::create($request->post());
    }

}
