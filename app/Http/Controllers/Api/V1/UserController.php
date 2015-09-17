<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller {


	public function index() {
		return User::all();
	}
	
	public function store() {
		
		$input = \Input::all();
		
		$validator = \Validator::make( $input, User::getCreateRules() );
		if ($validator->passes()) {

			$user = new User();
			$user->email = \Input::has('email')? $input['email'] : '';
			$user->firstname = \Input::has('firstname')? $input['firstname'] : '';
			$user->lastname	= \Input::has('lastname')? $input['lastname'] : '';
			$user->password = \Hash::make( $input['password'] );

			if (!$user->save()) 
				throw new \Dingo\Api\Exception\StoreResourceFailedException('An error occured. Please, try again.');
		} else {
			throw new \Dingo\Api\Exception\StoreResourceFailedException('Could not create new user.', $validator->errors());
		}
		\Log::info('<!> Created : '.$user);
		return $user;
	}
	
	public function signin() {
	    
    	$credentials = \Input::only('email', 'password');
    	$validator = \Validator::make($credentials, User::getApiAuthRules());
    	
    	if ($validator->passes() ){
    		try {
	    		if (!$token = \JWTAuth::attempt($credentials)) {
	        		return \API::response()->array(['error' => 'invalid_credentials'])->statusCode(401);
	      		}
	    	} catch (JWTException $e) {
	    	  	return \API::response()->array(['error' => 'could_not_create_token'])->statusCode(500);
	    	}
    	} else {
    		throw new \Dingo\Api\Exception\StoreResourceFailedException('Could not signin.', $validator->errors());
    	}
    	
	    return compact('token');
  
	}
	
	public function validateToken(){
    	return \API::response()->array(['status' => 'success'])->statusCode(200);
  	}
	
}