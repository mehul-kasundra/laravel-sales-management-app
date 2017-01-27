<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use App\User;
use Input;
use Auth;
use Redirect;
use Hash;
use View;
use Session;

use Illuminate\Http\Request;

class ClientController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}
	
	public function showLogin()
	{
		// show the form
		return View::make('index');
	}
	
	public function doLogin()
	{
		// validate the info, create rules for the inputs
		$rules = array(
		'email'    => 'required|email', // make sure the email is an actual email
		'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		);
		
		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);
		
		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
		return Redirect::to('/')
		->withErrors($validator) // send back all errors to the login form
		->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		} else {
		
		// create our user data for the authentication
		$userdata = array(
		'email'     => Input::get('email'),
		'password'  => Input::get('password'),
		'user_type' => 1 
		);
		
	//	echo $password = Hash::make('test'); die;
	//print_r($userdata); die;
		// attempt to do the login
		if (Auth::attempt($userdata,true)) {
			$user = Auth::getUser(); 
			Session::put('user_id', $user->id);
			Session::put('user_type', $user->user_type);
			// Get user shop id
			$GetShopID = User::where('id', '=', $user->id)->select('shop_id')->get();
			Session::put('shop_id', $GetShopID[0]->shop_id);
			$value = Session::get('user_id');
			//print_r($value); die;
			
		return Redirect::to('sale');
		// validation successful!
		// redirect them to the secure section or whatever
		// return Redirect::to('secure');
		// for now we'll just echo success (even though echoing in a controller is bad)
		//echo 'SUCCESS!';
		
		} else {  
	//	echo "fail"; die;      

		// validation not successful, send back to form 
		return Redirect::to('/')->with('message', 'Register Failed');;
		
		}
		
		}
	}
	
	public function doLogout()
	{
		Session::flush();
		Auth::logout(); // log the user out of our application
		return Redirect::to('/'); // redirect the user to the login screen
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
