<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('/','HomeController@home');
//Macaw::get('/h',function (){echo "hello";});
//Macaw::get('(:all)',function($fu){
//	echo "can not find the route <br>".$fu;
//});
Macaw::$error_callback = function(){
	throw new Exception("路由无匹配项 404 NOT FOUND");
};
Macaw::dispatch();
