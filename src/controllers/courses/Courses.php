<?php

class Courses extends Controller {

	#[Route(method: 'GET')]
	public function index(Request $request){

		return view('Course');
	}
}
