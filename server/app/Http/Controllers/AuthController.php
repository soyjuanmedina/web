<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Illuminate\Contracts\Auth\Authenticatable;
use App\User;
use Auth;

class AuthController extends Controller
{
    
    /**
     * Redirect the user to the GitHub authentication page.
     * 'email,user_birthday,user_location,user_hometown'
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->scopes([
            'email',
            'user_location', // Current town
            'public_profile' // id,cover,name,first_name,last_name,age_range,link,gender,locale,picture,timezone,updated_time,verified
        ])->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $user_info = array(

            // All Providers
            $user->getId(),
            $user->getNickname(),
            $user->getName(),
            $user->getEmail(),
            $user->getAvatar(),

        );

        //die ( "Suuuu! : " . json_encode( $user ) );

        $local_user = User::where( 'provider_id', $user->getId() )->first();

        if( $local_user === null ) {

            $newUser = new User;

            $newUser->provider_id = $user->getId();

            $newUser->name = $user->getName();

            $newUser->email = $user->getEmail();

            $newUser->save(); // TODO Check response

            Auth::loginUsingId( $newUser->user_id );

            return redirect()->route('welcome');

        }

        else {
            
            Auth::login($local_user); // Auth::loginUsingId(1, true); // Login and "remember" the given user...çç

            if (Auth::check())

                return redirect()->route('people');

            else

                echo "Error while logging! Please, try again";

        }

    }

    /**
     * [logout description]
     * @return [type] [description]
     */
    public function logout() {

        Auth::logout();

        return redirect()->route('landing');

    }

}
