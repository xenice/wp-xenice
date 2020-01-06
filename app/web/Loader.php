<?php
namespace app\web;

class Loader extends \xenice\theme\Loader
{
	public function __construct()
	{
	    isset($_SESSION) || session_start();
	    load_theme_textdomain(THEME_NAME, THEME_DIR . '/lang');
	    parent::__construct();
	}

}