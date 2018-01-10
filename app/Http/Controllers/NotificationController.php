<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo;

class NotificationController extends Controller
{
    public function index () {
    	$send = Nexmo::message()->send([
		    'to'   => '917890379068',
		    'from' => '917278088825',
		    'text' => 'Sobhan is testing laravel SMS notification using nexmo account. Link is https://github.com/Nexmo/nexmo-laravel'
		]);

		if($send){
			echo "SMS send successfully.";
		}else{
			echo "SMS send failed.";
		}
    }
}
