<?php

#[Middleware(new Auth)]
class Home extends Controller
{
	
	#[Route(method: 'GET')]
	public function index(Request $request)
	{
		
		return view('Home');
	}

	#[Route( '/logout',method: 'POST')]
	public function logOut(Request $request)
	{
		$token=$_COOKIE['auth_token'];

		setcookie('auth_token',
		 $token,
		 time() -60,
		 '/',
		 'localhost',
		 true,
		 true
	);
		return redirect('/login');
	}
}
