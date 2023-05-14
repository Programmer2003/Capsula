<?php

namespace App\Http\Controllers;

class GithubAuthController extends SocialiteAuthController
{
    public function __construct()
	{
		parent::__construct('github');
	}
}
