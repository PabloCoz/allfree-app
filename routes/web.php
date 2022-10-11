<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Livewire\User\ChatComponent;
use App\Http\Livewire\User\Gifts;
use App\Http\Livewire\User\Show;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

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
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', HomeController::class)->name('dashboard');

Route::get('/user/{user}/images', Show::class)->middleware('auth')->name('user.show');

Route::get('/category/{category}', [CategoryController::class, 'show'])->name('category.show');

/* Route::get('/user/{user}/gifts', Gifts::class)->middleware('auth')->name('user.gifts');

Route::get('post/{post}', [PostController::class, 'show'])->middleware('auth')->name('post.show');

Route::get('/chat', ChatComponent::class)->middleware('auth')->name('chat');

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    $name = $user->name;
    $userExists = User::where('external_id', $user->id)->where('external_auth', 'google')->first();
    if ($userExists) {
        Auth::login($userExists);
    } else {
        $userNew = User::create([
            'name' => $name,
            'email' => $user->email,
            'slug' => Str::slug($name),
            'external_id' => $user->id,
            'external_auth' => 'google',
        ]);
        Auth::login($userNew);
    }

    return redirect('/dashboard');
});

Route::get('/login-facebook', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/facebook-callback', function () {
    $user = Socialite::driver('facebook')->user();
    $name = $user->getName();
    $userExists = User::where('external_id', $user->id)->where('external_auth', 'facebook')->first();
    if($userExists){
        Auth::login($userExists);
    }else{
        $userNew = User::create([
            'name' => $name,
            'email' => $user->getEmail(),
            'slug' => Str::slug($name),
            'external_id' => $user->id,
            'external_auth' => 'facebook',
        ]);
        Auth::login($userNew);
    }

    return redirect('/dashboard');
}); */