<?php

use App\Core\Middleware;

class Auth extends Middleware
{
	static function runnable(Request $request, callable $next)
	{
		$token = $_COOKIE['auth_token'] ?? "";
		$is_from_api = $_SERVER['REQUEST_METHOD'] == 'POST';

		$secret_key = "abcdefghigklmnopqrstuvwxyz";
		$payload = Token::verify($token, $secret_key);

		if(!$payload){
			if ($is_from_api) {
				http_response_code(401);
				return json(['msg' => 'unauthorized access']);
			} else {
				return redirect('/login');
			}
		}

		$_SESSION['payload'] = (array) $payload;

		return $next();
	}
}