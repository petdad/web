<?php

use App\Http\Controllers\PetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpaceController;
use App\Http\Controllers\VetController;
use App\Models\Pet;
use App\Models\Space;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'hardwareImage' => asset('petdad-box.jpg')
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard',[
        'total_pet_space' => Space::count(),
        'total_active_pet_space' => Space::where('is_active', true)->count(),
        'vet_contacts' => 0,
        'total_pets' => Pet::count(),
        'spaces' => Space::with(['pets', 'controllers.devices'])->latest()->get()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/vets', VetController::class)->middleware(['auth', 'verified']);
Route::resource('/pets', PetController::class)->middleware(['auth', 'verified']);
Route::resource('/spaces', SpaceController::class)->middleware(['auth', 'verified']);
Route::resource('/controllers', SpaceController::class)->middleware(['auth', 'verified']);
Route::resource('/devices', SpaceController::class)->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
