<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Token;
use Sorskod\Larasponse\Larasponse;
use App\Transformers\UserTransformer;

class UserController extends Controller {

	public function store() {
		echo '1'; die();
		$input = \Input::all();

		print_r($input);
		// $user = '';
		// $validator = \Validator::make( $input, User::getCreateRules() );
		// if ( $validator->passes() ) {
		// 	$user = new User();
		// 	$user->email 				= \Input::has('email')? $input['email'] : '';
		// 	$user->firstname 			= \Input::has('firstname')? $input['firstname'] : '';
		// 	$user->lastname 			= \Input::has('lastname')? $input['lastname'] : '';
		// 	$user->password 			= \Hash::make( $input['password'] );
		// 	if ( !$user->save() ) 
		// 		return \Response::api()->errorInternalError('An error occured. Please, try again.');
		// } else {
		// 	return \Response::api()->errorWrongArgsValidator($validator);
		// }
		// \Log::info('<!> Created : '.$user);
		// return \Response::api()->withItem($user, new UserTransformer);
	}

}