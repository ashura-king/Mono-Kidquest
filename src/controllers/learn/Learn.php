<?php

class Learn extends Controller {

	#[Route(method: 'GET')]
	public function index(Request $request){

	 $payload = $_SESSION['payload'];

	 $user = User::findById($payload['id']);
	 if (empty($user)) {
		http_response_code(404);
		return json(['msg' => 'update failed']);
	 }
		return view('Learn', [
			'username' => $user->getUsername(),
			'email' => $user->getEmail(),
		]);
		
	}

	#[Route('/update', method: 'POST')]
	public function updateProfile(Request $request) {
		$username = $request->body['username'];
		$email = $request->body['email'];

		$id = $_SESSION['payload']['id'];

		$user = User::findById($id);

		if (empty($user)) {
			http_response_code(404);
			return json(['msg' => 'User not found']);
		}

		$user->setUsername($username);
		$user->setEmail($email);

	 $isUpdated =	User::update($user);

	 if (!$isUpdated) {
		http_response_code(400);
		return json(['msg' => 'update failed']);
	 }

	 http_response_code(200);
	 return json([
		'msg' => 'updated successfully',
		'username' => $username
	]);
	}
	#[Route('/delete', method: 'POST')]
public function deleteAccount(Request $request) {
    $id = $_SESSION['payload']['id'];

    $user = User::findById($id);

		if (empty($user)) {
			http_response_code(404);
			return json(['msg' => 'User not found']);
		}
    $isDeleted = User::delete($user);

    if (!$isDeleted) {
        http_response_code(400);
        return json(['msg' => 'delete failed']);
    }

    
    session_destroy();

		$token = $_COOKIE['auth_token'];

		setcookie('auth_token',
		$token,
		time() - 60,
		'/',
		'localhost',
		true,
		true
		);

    http_response_code(200);
		return json(['route' => '/login']);
}


	
}
