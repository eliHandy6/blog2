<?php 

/**
 * 
 */


namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller
{
	
	public function getHome(){

		$posts=Post::orderBy('created_at','desc')->limit(5)->get();

		return view('pages.home',compact('posts'));
	}

	public function getContact(){
		return view('pages.contact');
	}

	public function getFeedback(){
		return view('pages.feedback');
	}
	
}



 ?>