<?php
	
namespace App\Http\Controllers;

	class PagesController extends Controller {

		public function getIndex(){
			return view('pages.welcome');
		}

		public function getAbout(){
			$first = 'Eirineos';
			$last = 'Poularinos';
			$email = 'renospoyl@yahoo.gr';	
			// concatenate the first and last name 
			$fullname = $first . " " . $last;
			
			$data = [];
			$data['email'] = $email;
			$data['fullname'] = $fullname;
			
										// Call special method "with" to view the fullname.
			return view('pages.about')->withData($data);
		}

		public function getContact(){
			return view('pages.contact');
		}


	}