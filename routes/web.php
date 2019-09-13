<?php

use App\Addresslist;

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

Route::get('/', function () {
	$data = Addresslist::all();
	// $data = $data

	foreach( $data as $d){
		
		$contacts["list"][] = [	
								'id' => $d->id,
								'first_name' => $d->first_name,
								'last_name' => $d->last_name,
								'email' => $d->email,
								'mobile'=> $d->mobile
								];

	}

	return view('addresslist')->with($contacts); 

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get("/new_contact", function()
{
	return view("modal.include.addcontact");
});
Route::get("/edit_contact/{id}", function($id)
{
	

	$contact =   Addresslist::find($id); 
	return view("modal.include.editcontact")->with($contact);
});


Route::post('/createcontact', 'AddresslistController@store')->name('createcontact');
Route::post('/editcontact/{id}', 'AddresslistController@edit')->name('editcontact');
Route::post('/deletecontact/{id}', 'AddresslistController@destroy')->name('deletecontact');
