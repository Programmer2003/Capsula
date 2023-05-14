<?php

namespace App\Http\Controllers;

class GoogleAuthController extends SocialiteAuthController
{
    public function __construct()
	{
		parent::__construct('google');
	}
}
