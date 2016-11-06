<?php
namespace App\Http\Controllers\Facebook;

use App\Library\Facebook\MyFacebook;
use Redirect, Session, DB, Carbon;
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
	    $id_social = $oResponse->getGraphUser()->getId();
	    $query = DB::table('facebook_users')->where(['email' => $user_email])->get();
	    if($query->isEmpty())
	    {
	    	$id = DB::table('facebook_users')->insertGetId(
	    		['name' => $oResponse->getGraphUser()->getName(),
	    			'id_social'	 => $oResponse->getGraphUser()->getId(),
	    			'birthday' => $oResponse->getGraphUser()->getBirthday(),
	    			'email' => $oResponse->getGraphUser()->getEmail(),
	    			'created_at' => date('Y-m-d H:i:s'),
	    			'updated_at' => date('Y-m-d H:i:s'),
	    			'token' => Session::get('token'),
	    			'country' => $oResponse->getGraphUser()->getLocation()
	    		]
	    	);
	    	$query = DB::table('facebook_users')->where(['id' => $id])->get();
	    }
	    $user = $query->first();
	    Session::push('user.id', $user->id);
	    Session::push('user.name', $user->name);
	    Session::push('user.id_social', $user->id_social);
	    Session::push('user.birthday', $user->birthday);
	    Session::push('user.created_at', $user->created_at);
	    Session::push('user.updated_at', $user->updated_at);

	    return Redirect::route('facebookgroupadd');
	}
}