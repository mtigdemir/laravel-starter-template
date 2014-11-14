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
   
    public function getAbout() {
        $this->layout->content = View::make('pages.about');
    }

    public function getContact() {
        $this->layout->content = View::make('pages.contact');
    }
    
}
