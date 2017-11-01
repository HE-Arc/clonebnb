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
use App\Mail\ContactMessageCreated;

//Page d'acceuil
Route::get('/', [
	'as' => 'root_path',
	'uses'=> 'PagesController@home'
]);

//Route::name('root_path ')->get('/','PagesController@home')
//ou
//Route::get('/','PagesController@home')->name('root_path ')

//Page about
Route::get('/about', [
	'as' => 'about_path',
	'uses'=> 'PagesController@about'
]);

//Page contact
Route::get('/contact', [
	'as' => 'contact_path',
	'uses'=> 'ContactsController@create'
]);
Route::post('/contact', [
	'as' => 'contact_path',
	'uses'=> 'ContactsController@store'
]);

//Publier une annonce
Route::get('/advert', [
	'as' => 'advert_path',
	'uses'=> 'AdvertController@advert'
]);

Route::post('/advert', [
	'as' => 'advert_path',
	'uses'=> 'AdvertController@publish'
]);


Route::get('/profil', [
	'as' =>'profil_path',
	'uses'=>'UsersController@showEditForm'
]);

Route::post('/profil', [
	'as' =>'profil_path',
	'uses'=>'UsersController@edit'
]);

//===Fin Inscription, Login, Logout===

Route::get('/reset', [
	'as'=>'reset_path',
	'uses'=>'UsersController@reset'
]);

//===Connexion via réseaux sociaux===
Route::get('login/google', [
	'as' =>'google_path',
	'uses'=>'UsersLoginController@redirectToProvider'
]);

Route::get('/login/google/callback', [
	'as' =>'google_callback_path',
	'uses'=>'UsersLoginController@handleProviderCallback'
]);

//===Fin Connexion via réseaux sociaux===

//===Tableau de bord===
Route::get('/publish', [
	'as' =>'publish_path',
	'uses'=>'DashboardController@showPublishForm'
]);

Route::get('/dashboard', [
	'as' =>'dashboard_path',
	'uses'=>'DashboardController@showDashboard'
]);


Route::get('/message', [
	'as' =>'message_path',
	'uses'=>'DashboardController@showMessage'
]);


Route::get('/conversation', [
	'as' =>'conversation_path',
	'uses'=>'ConversationsController@showConversation'
]);

//===Afficher les annonces, Afficher les détails ===
Route::get('/listing/{category_id}', [
	'as' =>'listing_path',
	'uses'=>'AdsController@showListing'
]);

Route::get('/details', [
	'as' =>'details_path',
	'uses'=>'AdsController@showListingDetails'
]);
//===Fin des annonces===

//===Reservation===
Route::get('/reservation', [
	'as' =>'reservation_path',
	'uses'=>'ReservationsController@showReservation'
]);
//===Fin Reservation===

//===Reservation===
Route::get('/{user_id}/favorites', [
	'as' =>'favorite_path',
	'uses'=>'DashboardController@showFavorite'
]);
Route::post('/{user_id}/favorites', [
	'as' =>'favorite_path',
	'uses'=>'DashboardController@storeFavorite'
]);
//===Fin Reservation===

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
