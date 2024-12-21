<?php

class Register extends Controller {

    #[Route(method: 'GET')]
    public function index(Request $request, $msg = " ") {
			User::initUser();
        return view('Register', [
            'msg' => $msg
        ]);
    }

    #[Route(path: '/create', method: 'POST')]
    public function register(Request $request) {
        $username = $request->body['username'] ?? '';
        $password = $request->body['password'] ?? '';
        $email = $request->body['email'] ?? '';
        $repeat = $request->body['repeat'] ?? '';

        $result = new Validator([
            'username' => [
                'required' => true
            ],
            'password' => [
                'required' => true
            ],
            'email' => [
                'required' => true
            ],
            'repeat' => [
                'required' => true
            ]
        ], [
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'repeat' => $repeat
        ]);

        if (!$result->isValid()) {
            http_response_code(400);
            return json(['errors' => $result->getErrors()]);
        }

        $username = htmlspecialchars($username);
        $email = htmlspecialchars($email);
        $password = htmlspecialchars($password);

        $hashed_pw = password_hash($password, PASSWORD_DEFAULT);

        if ($repeat !== $password) {
            http_response_code(400);
            return json(['msg' => 'Passwords do not match. Please try again.']);
        }

        $new_user = new User(
            username: $username,
            email: $email,
            password: $hashed_pw
        );

        $isCreated = User::create($new_user);

        if (!$isCreated) {
            http_response_code(400);
            return json(['msg' => 'Failed to create user.']);
        }

        http_response_code(200);
        return json(['route' => '/login']);
    }
}
