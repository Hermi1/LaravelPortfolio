<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller {

    // public function showProfile($id)
    // {
    //     return view('user.profile', ['user' => User::findOrFail($id)]);
    // }
	public function getIndex(){
		$title="Portfolio - Dilasha";
		return view('welcome')->with('title',$title);
	}

	public function getWork(){
		$works=array("wandernepal.com.ultimatefreehost.in","sugardusted.netai.net","juviaspa.ultimatefreehost.in");
		return view('pages.work')->with('works',$works);
	}

	public function getResume(){
		return view('pages.resume');
	}

	public function getContact(){
		$phone=9813000000;
		return view('pages.contact')->with('phone',$phone);
	}

	public function getBlog(){
		$isRegistered=false;
		return view('blog')->with('isRegistered',$isRegistered);
	}
}