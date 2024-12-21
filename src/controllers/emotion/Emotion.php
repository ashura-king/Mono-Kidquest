<?php

class Emotion extends Controller {

	#[Route(method: 'GET')]
	public function index(Request $request){

		return view('Emotions');
	}
}
