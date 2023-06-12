<?php

namespace App\Http\Controllers\Auth;

use App\Events\NewVendor;
use App\Hours;
use App\Http\Controllers\Controller;
use App\Restorant;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function redirectTo()
    {
        $lastVendor=session('last_visited_restaurant_alias',null);
        if($lastVendor&&auth()->user()->hasRole('client')){
            return route('vendrobyalias',['alias'=>$lastVendor]);
        }else{
            return route('home');
        }
    }

    public function logout(Request $request)
    {
        
        $isClient=auth()->user()->hasRole('client');
        $lastVendor=session('last_visited_restaurant_alias',null);
        $this->guard()->logout();
        $request->session()->invalidate();
        if($lastVendor&&$isClient){
            return redirect(route('vendrobyalias',['alias'=>$lastVendor]));
        }else{
            return $this->loggedOut($request) ?: redirect('/');
        }
    }

    public function googleRedirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function googleHandleProviderCallback()
    {
        $user_google = Socialite::driver('google')->stateless()->user();
        $user = User::where('email', $user_google->email)->first();
        if (! $user) {
            $user = new User;
            $user->google_id = $user_google->id;
            $user->name = $user_google->name;
            $user->email = $user_google->email;
            $user->api_token = Str::random(80);
            $user->save();

            $user->assignRole('owner');

            $restaurant = new Restorant;
            $restaurant->name = 'Restaurant Name';
            $restaurant->user_id = $user->id;
            $restaurant->description = 'Description';
            $restaurant->minimum = $user->minimum | 0;
            $restaurant->lat = 0;
            $restaurant->lng = 0;
            $restaurant->address = 'Your Address';
            $restaurant->phone = 00000000;
            $restaurant->subdomain = $this->makeAlias(strip_tags($user_google->name));
            $restaurant->save();

            //default hours
            $hours = new Hours();
            $hours->restorant_id = $restaurant->id;
            
            $hours->{'0_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'0_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            $hours->{'1_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'1_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            $hours->{'2_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'2_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            $hours->{'3_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'3_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            $hours->{'4_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'4_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            $hours->{'5_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'5_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            $hours->{'6_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'6_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            
            $hours->save();

            $restaurant->setConfig('disable_callwaiter', 0);
            $restaurant->setConfig('disable_ordering', 0);

         //Fire event
         NewVendor::dispatch($user,$restaurant);

        } else {
            if (empty($user->google_id)) {
                $user->google_id = $user_google->id;
            }

            $user->update();
        }

        // login
        Auth::loginUsingId($user->id);

        return redirect($this->redirectTo());
    }

    public function facebookRedirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return \Illuminate\Http\Response
     */
    public function facebookHandleProviderCallback()
    {
        $user_facebook = Socialite::driver('facebook')->stateless()->user();
        $user = User::where('email', $user_facebook->email)->first();
        if (! $user) {
            $user = new User;
            $user->fb_id = $user_facebook->id;
            $user->name = $user_facebook->name;
            $user->email = $user_facebook->email;
            $user->api_token = Str::random(80);
            $user->save();

            $user->assignRole('owner');

            //Create Restorant
            $restaurant = new Restorant;
            $restaurant->name = 'Restaurant Name';
            $restaurant->user_id = $user->id;
            $restaurant->description = 'Description';
            $restaurant->minimum = $user->minimum | 0;
            $restaurant->lat = 0;
            $restaurant->lng = 0;
            $restaurant->address = 'Your Address';
            $restaurant->phone = 00000000;
            $restaurant->subdomain = $this->makeAlias(strip_tags($user_facebook->name));
            $restaurant->save();

            //default hours
            $hours = new Hours();
            $hours->restorant_id = $restaurant->id;
            
            $hours->{'0_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'0_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            $hours->{'1_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'1_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            $hours->{'2_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'2_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            $hours->{'3_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'3_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            $hours->{'4_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'4_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            $hours->{'5_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'5_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            $hours->{'6_from'} = config('settings.time_format') == "AM/PM" ? "9:00 AM" : "09:00";
            $hours->{'6_to'} = config('settings.time_format') == "AM/PM" ? "5:00 AM" : "17:00";
            
            $hours->save();

            $restaurant->setConfig('disable_callwaiter', 0);
            $restaurant->setConfig('disable_ordering', 0);

         //Fire event
         NewVendor::dispatch($user,$restaurant);
        } else {
            if (empty($user->fb_id)) {
                $user->fb_id = $user_facebook->id;
            }

            $user->update();
        }
        // login
        Auth::loginUsingId($user->id);

        return redirect($this->redirectTo());
    }
}
