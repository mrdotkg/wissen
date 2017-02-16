<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


//industries
Route::get('banking-and-financial-services',array('as'=>'banking-and-financial-services', 'uses'=>'HomeController@index'));
Route::get('manufacturing',array('as'=>'manufacturing', 'uses'=>'HomeController@index'));
Route::get('solutions/retail-sector',array('as'=>'retail-sector', 'uses'=>'HomeController@index'));
Route::get('solutions/healthcare',array('as'=>'healthcare', 'uses'=>'HomeController@index'));
Route::get('telecom',array('as'=>'telecom', 'uses'=>'HomeController@index'));


//services
Route::get('services/quality-assurance/',array('as'=>'quality-assurance/', 'uses'=>'HomeController@index'));
Route::get('services/consulting-services',array('as'=>'consulting-services', 'uses'=>'HomeController@index'));

Route::get('services/infrastructure-management',array('as'=>'infrastructure-management', 'uses'=>'HomeController@index'));
Route::get('services/infrastructure-management/itil-consulting',array('as'=>'infrastructure-management/itil-consulting', 'uses'=>'HomeController@index'));
Route::get('services/infrastructure-management/managed-services',array('as'=>'infrastructure-management/managed-services', 'uses'=>'HomeController@index'));
Route::get('services/infrastructure-management/technical-support',array('as'=>'infrastructure-management/technical-support', 'uses'=>'HomeController@index'));
Route::get('services/infrastructure-management/application-packaging/',array('as'=>'infrastructure-management/application-packaging/', 'uses'=>'HomeController@index'));
Route::get('services/infrastructure-management/it-asset-management',array('as'=>'infrastructure-management/it-asset-management', 'uses'=>'HomeController@index'));

Route::get('services/enterprise-services',array('as'=>'enterprise-services', 'uses'=>'HomeController@index'));
Route::get('services/enterprise-services/application-services',array('as'=>'enterprise-services/application-services', 'uses'=>'HomeController@index'));
Route::get('services/enterprise-services/erp-services',array('as'=>'enterprise-services/erp-services', 'uses'=>'HomeController@index'));
Route::get('services/enterprise-services/qa-testing/analytics-information-management',array('as'=>'enterprise-services/analytics-information-management', 'uses'=>'HomeController@index'));
Route::get('services/enterprise-services/mobility',array('as'=>'enterprise-services/mobility', 'uses'=>'HomeController@index'));
Route::get('services/enterprise-services/analytics-information-management',array('as'=>'enterprise-services/analytics-information-management', 'uses'=>'HomeController@index'));
Route::get('services/enterprise-services/analytics-information-management',array('as'=>'enterprise-services/analytics-information-management', 'uses'=>'HomeController@index'));

//company details
Route::get('company/about',array('as'=>'/company/about', 'uses'=>'HomeController@index'));
Route::get('company/leadership/',array('as'=>'/company/leadership', 'uses'=>'HomeController@index'));
Route::get('company/partners',array('as'=>'company/partners', 'uses'=>'HomeController@index'));
Route::get('company/social-responsibility',array('as'=>'company/social-responsibility', 'uses'=>'HomeController@index'));

//career
Route::get('careers/working-with-wissen',array('as'=>'careers/working-with-wissen', 'uses'=>'HomeController@index'));
Route::get('/careers/careerswissen/',array('as'=>'careers/careerswissen', 'uses'=>'HomeController@index'));

//contact
Route::get('contact/locations',array('as'=>'contact/locations', 'uses'=>'HomeController@index'));
Route::get('contact/write-to-us',array('as'=>'/contact/write-to-us/', 'uses'=>'HomeController@index'));
