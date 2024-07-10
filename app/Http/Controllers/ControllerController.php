<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Controller as SpaceController;
use App\Models\Pet;
use App\Models\Space;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ControllerController extends Controller
{
    /**
     * Display the user's profile form.
     */

    public function index(Request $request): Response
    {
        return Inertia::render('Controllers/Index',[
            "total_controllers" => Pet::where('user_id', Auth::id())->count(),
            "total_devices" => Pet::where('user_id', Auth::id())->where('vaccinated', true)->count(),
            "controllers" => SpaceController::where('user_id', Auth::id())->with('devices')->get()
        ]);
    }

    public function create(Request $request): Response
    {
        return Inertia::render('Controllers/Create',[
            'spaces' => Space::where('user_id', Auth::id())->get(),
            'unique_id' => generate_uuid()
        ]);
    }

    public function store(Request $request)
    {
        SpaceController::create($request->post());
    }

}
