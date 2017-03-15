<?php
/**
 * Created by PhpStorm.
 * User: hdcat
 * Date: 2017/3/15
 * Time: 下午11:40
 */

require 'vendor/autoload.php';

$engine = new Mustache_Engine();
echo $engine->render('Hello {{name }}',['name'=>'koi']);