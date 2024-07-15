<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Inertia\Response;

class PetController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function index(Request $request): Response
    {
        return Inertia::render('Pets/Index',[
            "total_pets" => Pet::where('user_id', Auth::id())->count(),
            "total_pets_vaccinated" => Pet::where('user_id', Auth::id())->where('vaccinated', true)->count(),
            "pets" => Pet::where('user_id', Auth::id())->get()
        ]);
    }

    public function create(Request $request): Response
    {
        return Inertia::render('Pets/Create',[
        ]);
    }

    public function show(Pet $pet): Response
    {
        $pet->load('vaccinationLogs');
        return Inertia::render('Pets/Show', ['pet' => $pet]);
    }

    public function store(Request $request)
    {
        if(env('IS_DEMO', false)){
            return;
        }

        Pet::create($request->post());
    }



}
