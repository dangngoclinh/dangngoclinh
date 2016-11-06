<?php
namespace App\Http\Controllers\Facebook;

use App\Http\Controllers\Facebook\BaseFBController;
use Schema;

/**
* Install
*/
class InstallController extends BaseFBController
{
	private $prefix = 'facebook_';
	public function index()
	{
		Schema::dropIfExists($this->prefix . 'user');
		Schema::create($this->prefix . 'user', function($table) {
			$table->increments('id');
			$table->string('name', 200);
			$table->string('id_social', 100);
			$table->date('brithday');
			$table->timestamps();
			$table->rememberToken();
			$table->string('token');
		});
	}
}