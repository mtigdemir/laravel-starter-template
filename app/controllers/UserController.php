<?php

class UserController extends BaseController {

    protected $layout = 'layouts.master';

    public function getDashboard() {
        $data['user'] = $user = Auth::user();
        $data['skills'] = $user->skills()->get();
        $this->layout->content = View::make('user.dashboard')->with($data);
    }

    /* Me Page */

    public function getMe() {
        $this->layout->content = View::make('user.me');
    }

    public function getWallet() {
        $this->layout->content = View::make('user.me');
    }

    /* Edit Page */

    public function getEdit() {
        $this->layout->content = View::make('user.edit');
    }

    public function postUpdate() {
        if (Input::has("categories")) {
            $list = Category::findCategoryID(Input::get("categories"));
            $res = Auth::user()->skills()->sync($list);
            return Redirect::to('/dashboard')->with("success" , Lang::get('profile.saved'));
        } else {
            return Redirect::to('/dashboard')->with("message", Lang::get("actions.empty_user_skills"));
        }
    }

    public function postSave() {
        $profile = Auth::user()->profile ? : new Profile;
        
        if ($profile->validate(Input::all())) {
            
            $profile->name = Input::get('name');
            $profile->surname = Input::get('surname');
            $profile->city = Input::get('city');
            $profile->district = Input::get('district');
            $profile->phone = Input::get('phone');
            $profile->postcode = Input::get('postcode');
            $profile->country = Input::get('country');
            $profile->timezone = Input::get('timezone');
            $profile->currency = Input::get('currency');
            
            Auth::user()->profile()->save($profile);
            return Redirect::to('/dashboard')->with("success" , Lang::get('profile.saved'));
        } else {
            return Redirect::to('dashboard')
                            ->with('message', 'The following errors occurred')
                            ->withErrors($profile->errors)
                            ->withInput();
        }
    }

    public function getLogout() {
        Auth::logout();
        return Redirect::to('/');
    }

}
