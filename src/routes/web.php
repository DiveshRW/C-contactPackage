<?php
use Illuminate\Http\Request;


// Route::get('contact', function(){
// 	// return 'Hi i am Contact Package';
// 	return view('contact::contact'); //packageName::viewName
// });
Route::group(['namespace' => 'Codotron\Contact\Http\Controllers'], function(){
Route::get('contact','ContactController@index')->name('contact');
Route::post('contact','ContactController@send');
});
// Route::post('contact', function(Request $request){

// 	return $request->all();
// 	// return 'Hi i am Contact Package';
// 	//return view('contact::contact'); //packageName::viewName
// })->name('contact');
// Route::match(['get', 'post'], 'contact', function (Request $request) {
//     // return 'Hi i am Contact Package';
//     // return view('contact::contact'); //packageName::viewName
//     return $request->all();
// })->name('contact');
?>