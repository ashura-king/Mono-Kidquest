<?php

class Colors extends Controller {

	#[Route(method: 'GET')]
	public function index(Request $request){

		return view('Color');
	}
}
