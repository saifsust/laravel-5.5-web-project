<?php
/**
 * @author :  SAIFUL ISLAM
 * @Coauthor : ASHIK SHAFAYTE
 * @Coauthor : NURUL HASAN
 * @batch  :SUST CSE 2013-14
 * @contact : saiful.sust.cse@gmail.com
 * @facebook : https://www.facebook.com/SaifulIslamLitonSust
 * @facebook : https://www.facebook.com/ashik.shafayet.5
 * @facebook : https://www.facebook.com/hasan.sust.cse
 * @package SUST SCHOOL WEB SITE
 * @version CVS: $Id: reader.php 19 2007-03-13 12:42:41Z shangxiao $
 * please ,contact with me .i will be pleasure if you contact with me for your important suggestions and opions for improving my coding or my coding skill
 **/
/**
 * @package using packege
 **/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showContactForm() {
		return view('frontend/contact');

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function sendMail(Request $request) {

		return $email = $request->Name;
		$subject = $request->subject;
		$text = $request->description;
		$data = array('name' => 'liton');
		Mail::send('frontend.thanks', $data, function ($message) use ($data) {
			$message->to('saifulislamliton8@gmail.com');
			$message->subject('Test Mail');
			$message->from('saiful.sust.cse@gmail.com');

		});
		return redirect('/contact');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
