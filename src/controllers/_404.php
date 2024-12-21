<?php

class _404 extends Controller {

	public static function error() {

		http_response_code(404);

		return view('404');
	}
}
