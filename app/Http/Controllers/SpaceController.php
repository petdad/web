<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Space;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class SpaceController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): Response
    {
        return Inertia::render('Space/Index',[
            'total_pet_space' => Space::where('user_id', Auth::id())->count(),
            'total_active_pet_space' => Space::where('user_id', Auth::id())->where('is_active', true)->count(),
            'spaces' => Space::where('user_id', Auth::id())->with(['pets', 'controllers.devices'])->latest()->get()
        ]);
    }

    public function create(Request $request): Response
    {
        return Inertia::render('Space/Create',[
        ]);
    }

    public function store(Request $request)
    {
        Space::create($request->post());
    }

}
