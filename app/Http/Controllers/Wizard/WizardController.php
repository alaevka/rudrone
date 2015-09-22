<?php

namespace App\Http\Controllers\Wizard;

use App\Http\Controllers\Controller;

class WizardController extends Controller
{	
	public function showWizard() {

		return view('wizard.index');
	}

}