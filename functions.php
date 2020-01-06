<?php

error_reporting(-1);
ini_set('display_errors', 1);
require __dir__ . '/config/app.php';
require __dir__ . '/vendor/autoload.php';

use xenice\theme\Theme;
use xenice\view\View;
use app\web\Loader;

Theme::bind('xenice_route_run',function($type, $method, $args){
    $class = ucfirst($type) . 'Controller';
	$controller = Theme::instance('app\web\controller\\' . $class);
    $controller->extends = View::instance();
    return call_user_func_array([$controller, $method], $args);
});

function _t($str, $domain = THEME_NAME)
{
    $translations = get_translations_for_domain($domain);
    return $translations->translate($str);
}

function import($slug)
{
	extract(View::getVars());
	include(VIEW_DIR . '/' . $slug . '.php');
}

Loader::instance();