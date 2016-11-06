<?php
namespace App\Http\Controllers\Facebook;

use App\Http\Controllers\Controller;
use App\Library\Facebook;

/**
* BaseFBController
*/
class BaseFBController extends Controller
{
	protected $fb;
	protected $data;

	public function __construct()
	{
		$this->data['title'] = "Title";
		$this->data['pagetitle'] = "Page Title";
	}
}