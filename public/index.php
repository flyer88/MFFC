<?php
//use Illuminate\Database\Capsule\Manager as Capsule;
//composer 自动载入
define('PUBLIC_PATH', __DIR__);
//启动器
require PUBLIC_PATH.'/../bootstrap.php';

// 路由配置、开始处理
require BASE_PATH.'/config/routes.php';

//Eloquent ORM
//$capsule = new Capsule;
//$capsule->addConnection(require '../config/database.php');
//$capsule->bootEloquent();

//路由配置
//require '../config/routes.php';

