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

//Routes d'accès au site
Route::get('/login', [
	'as'=>'login_path',
	'uses'=>'UsersController@login'
]);

//===Inscription, Login, Logout ===

Route::get('/login', [
	'as'=>'login_path',
	'uses'=>'UsersLoginController@showLoginForm'
]);

Route::post('/login', [
	'as'=>'login_path',
	'uses'=>'UsersLoginController@login'
]);

Route::get('/signup', [
	'as'=>'signup_path',
	'uses'=>'UsersRegisterController@showRegistrationForm'
]);

Route::post('/signup', [
	'as'=>'signup_path',
	'uses'=>'UsersRegisterController@register'
]);

Route::post('/logout', [
	'as'=>'logout_path',
	'uses'=>'UsersLogoutController@logout'
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
Route::get('auth/facebook', [
	'as' =>'facebook_path',
	'uses'=>'FacebookController@redirectToProvider'
]);

Route::get('auth/facebook/callback', [
	'as' =>'facebook_callback_path',
	'uses'=>'FacebookController@handleProviderCallback'
]);

//===Fin Connexion via réseaux sociaux===

//===Tableau de bord===
Route::get('/publish', [
	'as' =>'publish_listing_path',
	'uses'=>'PublishController@showPublishForm'
]);

Route::get('/dashboard', [
	'as' =>'space_path',
	'uses'=>'DashboardController@showDashboard'
]);

//===Fin Tableau de bord===
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
