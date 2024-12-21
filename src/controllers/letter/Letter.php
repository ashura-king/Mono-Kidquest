<?php

class Letter extends Controller {

	#[Route(method: 'GET')]
	public function index(Request $request){

		return view('Letters');
	}
}
