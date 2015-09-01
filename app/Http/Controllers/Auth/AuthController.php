<?php

namespace App\Http\Controllers\Auth;

use App\User as User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest', ['except' => 'getLogout']);
    }

    public function showSignUpForm()
    {
        return view('auth.signup');
    }

    public function signInGithub() {
        return \Socialite::with('github')->redirect();
    }

    public function signInVk() {
        return \Socialite::with('vkontakte')->redirect();
    }

    public function signInFacebook() {
        return \Socialite::with('facebook')->redirect();
    }

    public function signInFacebookCallback() {
        try {
            $user = \Socialite::driver('facebook')->user();
        } catch (Exception $e) {
            return \Redirect::to('signin/github');
        }
        if($authUser = $this->findOrCreateUser($user, 'facebook')) {
            \Auth::login($authUser, true);
            return \Redirect::to('/');
        } else {
            return \Redirect::to('signin')->with('provider_signin_error', 'Your email that we getting from FACEBOOK network already registered in the system. Maybe you have to authorize with the other social networks?');
        }
        
    }

    public function signInGithubCallback() {
        try {
            $user = \Socialite::driver('github')->user();
        } catch (Exception $e) {
            return Redirect::to('signin/github');
        }

        if($authUser = $this->findOrCreateUser($user, 'github')) {
            \Auth::login($authUser, true);
            return \Redirect::to('/');
        } else {
            return \Redirect::to('signin')->with('provider_signin_error', 'Your email that we getting from GITHUB network already registered in the system. Maybe you have to authorize with the other social networks?');
        }
    }

    public function signInVkCallback() {
        try {
            $user = \Socialite::driver('vkontakte')->user();
        } catch (Exception $e) {
            return Redirect::to('signin/vk');
        }
        if($authUser = $this->findOrCreateUser($user, 'vkontakte')) {
            \Auth::login($authUser, true);
            return \Redirect::to('/');
        } else {
            return \Redirect::to('signin')->with('provider_signin_error', 'Your email that we getting from VKONTAKTE network already registered in the system. Maybe you have to authorize with the other social networks?');
        }
        
    }

    private function findOrCreateUser($user, $provider)
    {
        if ($authUser = User::where('provider_id', $user->id)->where('provider', $provider)->first()) {
            return $authUser;
        }

        //check unique email
        if(!$check_user_with_exist_email = User::where('email', $user->email)->first()) {
            if($provider == 'github') {
                return User::create([
                    'firstname' => $user->name,
                    'email' => $user->email,
                    'provider' => $provider,
                    'provider_id' => $user->id,
                    'avatar' => $user->avatar
                ]);
            }
            if($provider == 'vkontakte') {
                
                return User::create([
                    'firstname' => $user->user['first_name'],
                    'lastname' => $user->user['last_name'],
                    'email' => $user->email,
                    'provider' => $provider,
                    'provider_id' => $user->id,
                    'avatar' => $user->avatar
                ]);
            }
            if($provider == 'facebook') {
                
                return User::create([
                    'firstname' => $user->user['first_name'],
                    'lastname' => $user->user['last_name'],
                    'email' => $user->email,
                    'provider' => $provider,
                    'provider_id' => $user->id,
                    'avatar' => $user->avatar
                ]);
            }
        } else {
            return false;
        }



        

    }

    public function signUp()
    {
       
        $input = \Input::all();
        $user = '';
        $validator = \Validator::make( $input, User::getCreateRules() );
        if ( $validator->passes() ) {
            $user = new User();
            $user->email                = \Input::has('email')? $input['email'] : '';
            $user->firstname            = \Input::has('firstname')? $input['firstname'] : '';
            $user->lastname             = \Input::has('lastname')? $input['lastname'] : '';
            $user->password             = \Hash::make( $input['password'] );
            if ( !$user->save() ) 
                return redirect('/signup')->withInput()->withErrors([
                     'firstname' => 'An error occured. Please, try again.'
                ]);
        } else {
            return redirect('/signup')->withInput()->withErrors($validator);
        }
        \Log::info('<!> Created : '.$user);
        \Auth::login($user);
        return redirect('/');
    }


    public function showSignInForm()
    {
        return view('auth.signin');
    }


    public function signIn()
    {
        
        $input = \Input::all();
        $input['device_id'] = 'device_id';
        $input['device_type'] = 'device_type';
        
        $validator = \Validator::make( $input, User::getAuthRules() );
        if ( $validator->passes() ){

            $user = User::where('email', '=', $input['email'])->first();

            if ( !($user instanceof User) ) {
                return redirect('/signin')->withInput()->withErrors([
                     'email' => 'User is not registered.'
                ]);
            }
            if ( \Hash::check( $input['password'] , $user->password) ) {
                \Auth::login($user);
                return redirect('/');
            } else {
                return redirect('/signin')->withInput()->withErrors([
                     'password' => 'Password is not right.'
                ]);
            }
        } else {
            return redirect('/signin')->withErrors($validator);
        }
        
    }

    public function signOut()
    {
        
        \Auth::logout();
        
        return redirect('/');
    }
}
