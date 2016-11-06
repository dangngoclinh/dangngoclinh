<?php 
namespace App\Library\Facebook;

use Facebook\FacebookRequest;

/**
* MyFacebookAction
*/
class MyFacebookAction
{
	private $fbApp;
	private $request;
	private $fb;
	private static $instance = null;

	private function __construct()
	{
		$this->fbApp = MyFacebook::getFacebookApp();
		$this->fb    = MyFacebook::getFacebook();
	}

	public static function getInstance()
	{
		if(MyFacebookAction::$instance == null)
		{
			MyFacebookAction::$instance = new MyFacebookAction();
		}
		return MyFacebookAction::$instance;
	}

	public function getGroupInfo($id, $token)
	{
		$request = new FacebookRequest($this->fbApp, $token, 'GET', '/' . $id . '?fields=cover,description,email,icon,id,member_request_count,name,owner');
		try {
		 	$response = $this->fb->getClient()->sendRequest($request);
			return $response->getGraphNode();
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
			  // When Graph returns an error
			  //echo 'Graph returned an error: ' . $e->getMessage();
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  	// When validation fails or other local issues
		  	//echo 'Facebook SDK returned an error: ' . $e->getMessage();
		}
		return false;
	}

	public function getMe()
	{
		
	}
}