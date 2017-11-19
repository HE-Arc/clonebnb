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
use Carbon\Carbon;

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

//===Fin Connexion via réseaux sociaux===

//===Tableau de bord===

//Publier une annonce
Route::get('/publish', [
	'as' =>'publish_path',
	'uses'=>'DashboardController@showPublishForm'
]);

Route::post('/publish', [
	'as' =>'publish_path',
	'uses'=>'DashboardController@publish'
]);

//Publier une demande
Route::get('/demand', [
	'as' =>'demand_path',
	'uses'=>'DashboardController@showDemandForm'
]);

Route::post('/demand', [
	'as' =>'demand_path',
	'uses'=>'DashboardController@addDemand'
]);

Route::get('/dashboard', [
	'as' =>'dashboard_path',
	'uses'=>'DashboardController@showDashboard'
]);

Route::get('/my-online-ads', [
	'as' =>'online_path',
	'uses'=>'DashboardController@onlineAds'
]);

Route::get('/reviews', [
	'as' =>'reviews_path',
	'uses'=>'DashboardController@reviews'
]);

Route::get('/my-pending-ads', [
	'as' =>'pending_path',
	'uses'=>'DashboardController@pendindAds'
]);

Route::get('/my-expired-ads', [
	'as' =>'expired_path',
	'uses'=>'DashboardController@expiredAds'
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
Route::get('/ads/{category_id}', [
	'as' =>'ads_path',
	'uses'=>'AdsController@showAds'
]);

Route::get('/ad/{ad_id}', [
	'as' =>'details_path',
	'uses'=>'AdsController@showAdDetails'
]);
//===Fin des annonces===

//===Reservation===
Route::get('/reservation', [
	'as' =>'reservation_path',
	'uses'=>'ReservationsController@showReservation'
]);
//===Fin Reservation===

//===Comments===
Route::post('/ad/{ad_id}/comment', [
	'as' =>'comment_path',
	'uses'=>'CommentsController@edit'
], Carbon::setLocale('fr'));

Auth::routes();
