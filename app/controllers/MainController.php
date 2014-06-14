<?php

class MainController extends BaseController {

    protected $layout = 'layouts.default';

    public function getIndex() {
        if (Auth::check()) {
            return Redirect::to('/dashboard');
        } else {
            $this->layout->content = View::make('pages.home');
        }
    }
    
    public function showUser(){
      
    }

    /* Login */
    public function getLogin() {
        if (Auth::check()) {
            return Redirect::to('/');
        } else {
            $this->layout->content = View::make('user.login');
        }
    }

    /* Register */

    public function getRegister() {
        if (Auth::check()) {
            return Redirect::to('/');
        } else {
            $this->layout->content = View::make('user.register');
        }
    }

    public function getAbout() {
        $this->layout->content = View::make('pages.about');
    }

    public function getContact() {
        $this->layout->content = View::make('pages.contact');
    }
    
    //POST ACTIONS
    /* User Create */
    public function postCreate() {
        $user = new User;

        $input = array
            (
            'email' => Input::get('email'),
            'username' => Input::get('username'),
            'password' => Input::get('password'),
            'password_confirmation' => Input::get('re-password'),
        );

        if ($user->validate($input)) {

            $user->email = $input['email'];
            $user->username = $input['username'];
            $user->password = Hash::make($input['password']);
            $user->save();

            return Redirect::to('/login')
                            ->with('success', Lang::get('static.register_confirm'));
        } else {
            return Redirect::to('register')
                            ->with('message', 'The following errors occurred')
                            ->withErrors($user->errors)
                            ->withInput();
        }
    }
    
    /* User Sign in */

    public function postSignin() {

        if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password')))) {
            return Redirect::to('/dashboard')
                            ->with('message', 'You are now logged in!');
        } else {
            return Redirect::to('login')
                            ->with('message', 'Your username/password combination was incorrect')
                            ->withInput();
        }
    }

}
