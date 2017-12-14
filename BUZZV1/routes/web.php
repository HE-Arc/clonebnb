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

Route::get('/dashboard', [
	'as' =>'dashboard_path',
	'uses'=>'DashboardController@showDashboard'
]);

Route::get('/my-online-ads', [
	'as' =>'online_path',
	'uses'=>'DashboardController@onlineAds'
]);

Route::get('/favorites', [
	'as' =>'favorites_path',
	'uses'=>'DashboardController@favorites'
]);

Route::get('/reviews', [
	'as' =>'reviews_path',
	'uses'=>'DashboardController@reviews'
]);

Route::get('/my-pending-ads', [
	'as' =>'pending_path',
	'uses'=>'DashboardController@pendindAds'
]);

Route::post('/favorites', [
	'as' => 'delete_fav_path',
	'uses' => 'DashboardController@deleteFavorite'
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

//===Afficher les annonces, sous forme de grid ===
Route::get('/ads/grid/{category_id}', [
	'as' =>'ads_grid_path',
	'uses'=>'AdsController@showAdsGrid'
]);

//===Affichage des annonces sous forme de liste ===
Route::get('/ads/list/{category_id}', [
	'as' =>'ads_list_path',
	'uses'=>'AdsController@showAdsList'
]);

Route::get('/ad/{ad_id}', [
	'as' =>'details_path',
	'uses'=>'AdsController@showAdDetails'
]);
//===Fin des annonces===

//===Recherche===
Route::get('/ads', [
	'as' =>'search_path',
	'uses'=>'AdsController@searchAd'
]);
//===Fn recherhe===

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

//===Favorites===
Route::post('/favorite', [
	'as' => 'favorite_path',
	'uses' => 'AdsController@postFavorite'
]);
Auth::routes();
