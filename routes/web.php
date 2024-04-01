<?php



/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

// router default

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

// generate new key

$router->get('/key', function () {
    return \Illuminate\Support\Str::random(32);
});


// route ui

// zakat

$router->get('/', 'ZakatController@index');
$router->get('/zakat', 'ZakatController@index');
$router->get('/zakat/{id}', 'ZakatController@detail');
$router->get('/zakatstore', 'ZakatController@store');
$router->post('/zakat', 'ZakatController@create');
$router->get('/zakatupdate/{id}', 'ZakatController@show');
$router->post('/zakat/{id}', 'ZakatController@update');
$router->get('/zakatdelete/{id}', 'ZakatController@destroy');
