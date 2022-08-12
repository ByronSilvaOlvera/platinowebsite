<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Front')->name('front.')->group( function() {
	Route::get('/', 'IndexController@index')->name('index');
	Route::get('/nosotros', 'IndexController@about')->name('about');
	Route::get('/servicios', 'IndexController@service')->name('service');
	Route::get('/politicas-certificaciones', 'IndexController@policies')->name('policies');
	Route::get('/cobertura', 'IndexController@coverage')->name('coverage');
	Route::get('/escuela-trade', 'IndexController@school')->name('school');
	Route::post('/escuela-trade', 'MailController@school');
	Route::get('/contactenos', 'IndexController@contact')->name('contact');
	Route::post('/contactenos', 'MailController@contact');
	Route::get('/ptsmart', 'IndexController@ptsmart')->name('ptsmart');
	Route::post('/schedule', 'MailController@schedule');
	Route::post('/quotation', 'MailController@quotation');
	

});
// Route::namespace('Marketplace')->name('marketplace.')->group( function() {
// 	Route::get('/marketplace', 'IndexController@index')->name('index');
// });

// Route::get('/mailable', function () {
	
// 	$data = [
// 		'from'      => 'info@promogaza.com',
// 		'name'      => "['name']",
// 		'origin'      => "['origin']",
// 		'company'   => "['company']",
// 		'telephone' => "['telephone']",
// 		'email'     => "['email']",
// 		'email_cc'  => 'webmaster@promogaza.com',
// 		'subject'   => "['subject']",
// 		'message'   => "['message']"
// 	];
//     return new App\Mail\Contact( $data );
// });

// Route::namespace('Admin')
// 	->prefix('admin')
// 	->name('admin.')->group( function() {
// 	Route::get('/', 'IndexController@index')->name('index');
// });

