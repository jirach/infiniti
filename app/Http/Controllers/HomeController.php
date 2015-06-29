<?php namespace Infiniti\Http\Controllers;

class HomeController extends Controller {

/**
 * Create a new controller instance.
 *
 * @return void
 */
public function __construct(){
	$this->middleware('auth');
	//parent::__construct();
	//$this->news = $news;
	//$this->user = $user;
}

/**
 * Infiniti main page
 *
 * @return Response
 */
public function index(){

	return view('pages.home');
}

} // Class end