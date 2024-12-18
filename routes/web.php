<?php

use App\Enums\Role;
use App\Http\Controllers\ProfileController;
use App\Models\Account;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  if (Auth::user()) {
    return redirect()->to('/dashboard');
  } elseif (User::count() === 0 || Account::where('type_user', Role::ADMIN->value)->count() === 0) {
    $user = User::create([
      'name' => 'Admin',
      'email' => 'admin@ucc.ac.cd',
      'password' => Hash::make('Admin123@'),
    ]);

    if ($user) {
      Account::create([
        'user_id' => $user->id,
        'type_user' => Role::ADMIN,
      ]);
    }
    return redirect('login');
  }
  return view('welcome');
})->name('welcome');

Route::middleware(['auth', 'verified'])->group(function () {
  Route::get('/admin', function () {
    return view('admins.dashboard');
  })->name('admins.dashboard');

  Route::get('/dashboard', function () {
    return view('dashboard');
  })->name('dashboard');
});


Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
