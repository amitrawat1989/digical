<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'Devdojo\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Devdojo\Calculator\CalculatorController@subtract');
Route::get('multiply/{a}/{b}', 'Devdojo\Calculator\CalculatorController@multiply');
Route::get('divide/{a}/{b}', 'Devdojo\Calculator\CalculatorController@divide');