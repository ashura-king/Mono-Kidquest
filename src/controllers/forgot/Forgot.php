<?php

class Forgot extends Controller {

	#[Route(method: 'GET')]
	public function index(Request $request,$msg = " " ){
		
		return view('ForgotPassword',['msg'=>$msg
		]);
	}

	#[Route(method: 'POST')]
	public function forgot(Request $request){
		
		$username = $request->body['username'] ?? '';
		$password = $request->body['password'] ?? '';
		$confirm = $request->body['confirm'] ?? '';
	

		if(empty($password)){
			http_response_code(400);
			return json(['msg' => 'You must filled the requirements before to proceed']);
		 
		}
		if ($password !== $confirm) {
			http_response_code(400);
			return json(['msg' => 'Password does not match']);
	}

	
		
		$username =htmlspecialchars($username);
		$password= htmlspecialchars($password);

		$user = User:: find(['username'=>$username]);
		if(empty($user)){
			http_response_code(400);
			return json(['msg' => 'User not found']);
		}
		
	 $hashed_pw = password_hash($password, PASSWORD_DEFAULT);

    $user->setPassword($hashed_pw);

		$is_updated = User::update($user);

    if (!$is_updated) {
			http_response_code(400);
			return json(['msg' => 'Username failed to update']);
    }
	
		http_response_code(200);
		return json(['route' => '/login']);
}
}
