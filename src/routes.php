<?php

Route::get('calculator', function(){
	echo 'Hello World from the calculator package!';
});

Route::get('add/{a}/{b}', 'Amitrawat1989\Digical\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Amitrawat1989\Digical\CalculatorController@subtract');
Route::get('multiply/{a}/{b}', 'Amitrawat1989\Digical\CalculatorController@multiply');
Route::get('divide/{a}/{b}', 'Amitrawat1989\Digical\CalculatorController@divide');