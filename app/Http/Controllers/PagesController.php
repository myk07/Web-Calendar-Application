<?php
	
namespace App\Http\Controllers;

	class PagesController extends Controller {
		public function __construct() {
			$this->middleware('auth');
		}

		public function getIndex(){
			return view('pages.welcome');
		}

		 public function getCalendar(){
			return view('pages.calendar');
		}

		


	}