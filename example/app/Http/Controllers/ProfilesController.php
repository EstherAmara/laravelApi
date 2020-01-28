<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    App\Profile;

class ProfilesController extends Controller
{
    public function show(Profile $profile) {

        // $profile = Profile::find($profile);

        /*
            //get profile based on username and get the first record
            $profile = Profile::where('username', $profile)->first();
            //this method doesn't work with route model binding. That's because there's a function in the Model model (getRouteKeyName) that matches the id to a record in route model binding. We need to override that function in the profile model
        */
        return $profile;
    }
}
