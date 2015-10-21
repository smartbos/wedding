<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    $user = [];
    if(Auth::check()){
        $user = Auth::user();
    }

    return view('invite', compact('user'));
});

Route::get('/partyIn', function() {
    if(Auth::check()) {
        $user = Auth::user();
        $user->want_party = 1;
        $user->save();

        return Redirect::to('/#second');
    } else {
        session(['want_party' => 1]);
        return Socialite::driver('facebook')->redirect();
    }
});

Route::get('/partyOut', function() {
    $user = Auth::user();
    $user->want_party = 0;
    $user->save();

    return Redirect::to('/#second');
});

Route::get('/matchIn', function() {
    if(Auth::check()) {
        $user = Auth::user();
        $user->want_match = 1;
        $user->save();

        return Redirect::to('/#match');
    } else {
        session(['want_match' => 1]);
        return Socialite::driver('facebook')->redirect();
    }
});

Route::get('/matchOut', function() {
    $user = Auth::user();
    $user->want_match = 0;
    $user->save();

    return Redirect::to('/#match');
});


Route::get('/match', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/fb_callback', function () {
    $user = Socialite::driver('facebook')->user();

    $loginUser = User::where('fb_id', $user->id)->first();
    if(!$loginUser) {
        $loginUser = User::create([
            'name' => $user->name,
            'fb_id' => $user->id,
            'email' => $user->email,
            'fb_profile_img' => $user->avatar
        ]);
    }

    Auth::loginUsingId($loginUser->id);

    $wantParty = session('want_party');
    if($wantParty) {
        $loginUser->want_party = 1;
        $loginUser->save();
    }

    $wantMatch = session('want_match');
    if($wantMatch) {
        $loginUser->want_match = 1;
        $loginUser->save();
    }

    session([
        'want_party' => '',
        'want_match' => ''
    ]);

    return Redirect::to('/');
});

Route::get('/logout', function () {
    Auth::logout();

    return Redirect::to('/');
});
