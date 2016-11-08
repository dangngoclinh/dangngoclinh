<?php
namespace App\Http\Controllers\Facebook;

use App\Library\Facebook\MyFacebook;
use Redirect, Session, DB, Carbon;
use App\FacebookUsers;
/**
* FacebookController
*/
class FacebookController extends BaseFBController
{
	public function __construct()
	{
		$this->fb = MyFacebook::getFacebook();
	}

	public function login()
	{

	}

	public function loginFB()
	{
		$helper = $this->fb->getRedirectLoginHelper();
		$permissions = ['email']; // Optional permissions
		$loginUrl = $helper->getLoginUrl(route('facebookloginfbcallback'), MyFacebook::getPermissions());
		return Redirect::to($loginUrl);
	}

	public function loginFBCallback()
	{
		if(!Session::has('token'))
		{
			$helper = $this->fb->getRedirectLoginHelper();
			try {
				$accessToken = $helper->getAccessToken();
				Session::put('token', $accessToken->getValue());
			} catch(Facebook\Exceptions\FacebookResponseException $e) {
				// When Graph returns an error
				echo 'Graph returned an error: ' . $e->getMessage();
			} catch(Facebook\Exceptions\FacebookSDKException $e) {
				// When validation fails or other local issues
				echo 'Facebook SDK returned an error: ' . $e->getMessage();
				exit;			
			}
		}
	    $oResponse = $this->fb->get('/me?fields=id,name,email,birthday,location', Session::get('token'));

	    $user_email = $oResponse->getGraphUser()->getEmail();
	    $id_social  = $oResponse->getGraphUser()->getId();
	    $query      = FacebookUsers::where('email', $user_email)->get();
	    if($query->isEmpty())
	    {
	    	$facebook_users            = new FacebookUsers;
	    	$facebook_users->name      = $oResponse->getGraphUser()->getName();
	    	$facebook_users->email     = $oResponse->getGraphUser()->getEmail();
	    	$facebook_users->id_social = $oResponse->getGraphUser()->getId();
	    	$facebook_users->birthday  = $oResponse->getGraphUser()->getBirthday();
	    	$facebook_users->token     = Session::get('token');
	    	$facebook_users->country   = $oResponse->getGraphUser()->getLocation();
	    	$facebook_users->save();
	    }
	    $facebook_users = $query->first();


	    $user = $facebook_users;
	    Session::push('user.id'         , $user->facebook_users);
	    Session::push('user.name'       , $user->facebook_users);
	    Session::push('user.id_social'  , $user->facebook_users);
	    Session::push('user.birthday'   , $user->facebook_users);
	    Session::push('user.created_at' , $user->facebook_users);
	    Session::push('user.updated_at' , $user->facebook_users);

	    return Redirect::route('facebookgroupadd');
	}
}