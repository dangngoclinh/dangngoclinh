<?php
namespace App\Http\Controllers\Facebook;

use App\Http\Controllers\Facebook\BaseFBController;
use Facebook\FacebookRequest;
use Session;
use App\Library\Facebook\MyFacebook;
use App\Library\Facebook\MyFacebookAction;

/**
* GroupController
*/
class GroupController extends BaseFBController
{
	private $myfbac;

	public function __construct()
	{
		$this->myfbac = MyFacebookAction::getInstance();
		parent::__construct();
	}

	//group/add
	public function add($id = null)
	{
		if($id != null)
		{
			$groupInfo = $this->myfbac->getGroupInfo($id, Session::get('token'))->asArray();
			if(count($groupInfo) > 0)
			{
				$group = $groupInfo[0];
				return Response::json($group);
			}
		}

		$this->data['pagetitle'] = "Thêm Group";
		return view('admin.facebook.group.add', $this->data);
	}

	public function search($id)
	{
		$groupInfo = $this->myfbac->getGroupInfo($id, Session::get('token'));
		return Response::json($groupInfo->asArray());
	}

	public function group_post($id, $message)
	{
		$fbApp = MyFacebook::getFacebookApp();
		$request = new FacebookRequest($fbApp, 
										Session::get('token'), 
										'POST', 
										'/' . $id . '/feed', $message);

		$fb = MyFacebook::getFacebook();
		// $request = $fb->request('GET', '/me');

		// Send the request to Graph
		try {
		  $response = $fb->getClient()->sendRequest($request);
		} catch(Facebook\Exceptions\FacebookResponseException $e) {
		  // When Graph returns an error
		  echo 'Graph returned an error: ' . $e->getMessage();
		  exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  // When validation fails or other local issues
		  echo 'Facebook SDK returned an error: ' . $e->getMessage();
		  exit;
		}

		$graphNode = $response->getGraphNode();
	}
}