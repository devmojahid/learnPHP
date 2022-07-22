<?php 

Route::get("/",function(){
	echo "Welcole";
});

Route::get("/say/{name}",function($name){
	echo "Welcole {$name}";
});
Route::get("/hello/world","HelloController@sayHelloWorld");