<?php

namespace App;

use Google_Client;
use Google_Service_Oauth2;
use Google_Service_Oauth2_Userinfoplus;
use Session;

class GoogleClient
{
	public function __construct(Google_Client $client)
	{
		$this->client = $client;

		$this->client->setClientId($_ENV['GOOGLE_CLIENT_ID']);
		$this->client->setClientSecret($_ENV['GOOGLE_CLIENT_SECRET']);
		$this->client->setRedirectUri($_ENV['GOOGLE_REDIRECT_URI']);

		$scopes = explode(',', $_ENV['GOOGLE_SCOPE']);

		$this->client->setScopes($scopes);
	}

	public function getLoginUrl()
	{
		return $this->client->createAuthUrl();
	}

	public function checkCode($code)
	{
		if (! $code) return false;

		$this->client->authenticate($code);

		$this->client->setAccessToken($this->client->getAccessToken());

		return true;
	}

	public function getUser()
	{
		$oauth = new Google_Service_Oauth2($this->client);

		$information = $oauth->userinfo->get();

		return $this->convertToUserObject($information);
	}

	protected function convertToUserObject(Google_Service_Oauth2_Userinfoplus $information)
	{
		if (! $user = User::find($information->id))
		{
			$user = new User();

			$user->google_id = $information->id;
			$user->given_name = $information->givenName;
			$user->family_name = $information->familyName;
			$user->email = $information->email;

			$user->save();
		}

		return $user;
	}
}
