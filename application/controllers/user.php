<?php
class User_Controller extends Base_Controller
{

	public function action_form(){
		if(REQUEST::route()->is('user_login_widget')){

			return View::make('user.login-menu');

		}elseif(REQUEST::route()->is('user_login')){

			$this->layout->title = "Connexion";
			$this->layout->content = View::make('user.login');

		}
	}

	public function action_auth(){

		$userinfo = array(
		    'email' => Input::get('email'),
		    'password' => Input::get('password')
		);
		if ( Auth::attempt($userinfo) )
		{
		    return Redirect::to('/');
		}
		
		return Redirect::to('user_login')
		    ->with('login_errors', true);
	}

	public function action_logout(){
		Auth::logout();
        return Redirect::to('/');
    }

}