<?php

class Login extends Controller {

	#[Route(method: 'GET')]
	public function index(Request $request, $msg="")
	{
		return view('Login',['msg' => $msg]);
	}

	#[Route(method: 'POST')]
	public function authentication(Request $request){
			$username = $request->body['username'] ?? '';
			$password = $request->body['password'] ?? '';

			if(empty($username)||  empty($password)){
				http_response_code(400);
				return json(['msg' => 'All fields required']);
			}
			$username= htmlspecialchars($username);
			$password=htmlspecialchars($password);

			$user = User:: find(['username'=>$username]);
			if(empty($user)){
				http_response_code(400);
				return json(['msg' => 'User not found']);
			}
			if(!password_verify($password, $user->getPassword())){
				http_response_code(400);
				return json(['msg' => 'Wrong credentials']);
			}

				$secret_key = "abcdefghigklmnopqrstuvwxyz";
				$payload =[
					'id'=> $user->getId(),
				];

				$token = Token::sign($payload,$secret_key);
				setcookie('auth_token',
				$token,
				time() + 456337 * 60,
				'/',
				'localhost',
				true,
				true
				);

			http_response_code(200);
			return json([
				'route' => '/home',
				'token' => $token
			]);
	}
}
