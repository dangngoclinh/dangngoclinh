<?php 
namespace App\Library\Facebook;

use Facebook\Facebook;
use Facebook\FacebookApp;

/**
* MyFacebook
*/
class MyFacebook
{
	public static $app_id = '717374085072369';
	public static $app_secret = '5ac995a23e4387ce82d0c1c277be62c3';
	private static $default_graph_version = 'v2.8';

	public static function getFacebook()
	{
		return new Facebook(array('app_id' => MyFacebook::$app_id, 
									'app_secret' => MyFacebook::$app_secret,
									'default_graph_version' => MyFacebook::$default_graph_version,
									'persistent_data_handler' => new MyPersistentDataHandler()));
	}

	public static function getFacebookApp()
	{
		return new FacebookApp(MyFacebook::$app_id, MyFacebook::$app_secret);
	}


	public static function getPermissions()
	{
		return array('email', 
			'public_profile', 
			'user_friends', 
			'user_birthday',
			'publish_actions',
			'publish_pages',
			'user_managed_groups');
	}
}