<?php

use Illuminate\Support\Facades\Route;

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

Route::get('', 'AppController@index')->name('app.index');
Route::get('current-competitions', 'AppController@currentCompetitions')->name('app.current-competitions');
Route::get('current-tech-competitions', 'AppController@currentTechCompetitions')->name('app.current-tech-competitions');
Route::get('cash-competitions', 'AppController@cashCompetitions')->name('app.cash-competitions');
Route::get('competition-winners/featured', 'AppController@winners')->name('app.winners');
Route::get('draw-results', 'AppController@drawResults')->name('app.draw-results');
Route::get('faq', 'AppController@faq')->name('app.faq');
Route::get('cart', 'AppController@cart')->name('app.cart');
Route::get('my-account', 'AppController@myAccount')->name('app.my-account');
Route::get('checkout', 'AppController@checkout')->name('app.checkout');
Route::get('checkout-2', 'AppController@checkout2')->name('app.checkout');


Route::prefix('product')->group(function () {
    Route::get('instant-win-17', 'ProductController@product1')->name('product.1');
    Route::get('win-g80-m3-comp-1000cash', 'ProductController@product2')->name('product.2');
    Route::get('win-ford-ranger-wildtrak-1000cash', 'ProductController@product3')->name('product.3');
    Route::get('win-30-000-tax-free-cash', 'ProductController@product4')->name('product.4');
    Route::get('win-5-000-tax-free-cash-54', 'ProductController@product5')->name('product.5');
    Route::get('win-this-dyson-beauty-bundle-3', 'ProductController@product6')->name('product.6');
    Route::get('win-an-iphone-14-pro-or-pro-max-39', 'ProductController@product7')->name('product.7');
    Route::get('win-1-000-tax-free-cash-71', 'ProductController@product8')->name('product.8');
    Route::get('win-1-000-tax-free-cash-72', 'ProductController@product9')->name('product.9');
    
    Route::get('win-a-dji-mavic-air-2-fly-more-combo-3', 'ProductController@product10')->name('product.10');
    Route::get('win-an-ipad-pro-11', 'ProductController@product11')->name('product.11');
    Route::get('win-a-pure-air-pro-electric-scooter-2nd-gen-3', 'ProductController@product12')->name('product.12');
    Route::get('win-this-ps5-disc-edition-5', 'ProductController@product13')->name('product.13');
    Route::get('win-an-xbox-series-x-5', 'ProductController@product14')->name('product.14');
    Route::get('win-an-ooni-pizza-oven-3', 'ProductController@product15')->name('product.15');
    Route::get('win-100-cash-doubled-if-your-order-is-over-1-7', 'ProductController@product16')->name('product.16');
   
    // CAR & BIKE COMPETITIONS
    Route::get('win-urban-defender-2000cash', 'ProductController@product17')->name('product.17');
    Route::get('win-stage-2-m4-comp-1000cash', 'ProductController@product18')->name('product.18');
    Route::get('win-2020-ktm-supermoto-690-smcr', 'ProductController@product19')->name('product.19');
    Route::get('win-sur-ron-lbx', 'ProductController@product20')->name('product.20');
    Route::get('instant-win-18', 'ProductController@product21')->name('product.21');
    Route::get('win-m2-competition-1000cash', 'ProductController@product22')->name('product.22');
    
    // CASH COMPETITIONS
    Route::get('win-20-000-cash-6', 'ProductController@product23')->name('product.23');
    Route::get('win-5-000-tax-free-cash-55', 'ProductController@product24')->name('product.24');
    Route::get('win-1-000-tax-free-cash-74', 'ProductController@product25')->name('product.25');
    Route::get('win-1-000-tax-free-cash-73', 'ProductController@product26')->name('product.26');
    Route::get('win-1-500-tax-free-cash-42', 'ProductController@product27')->name('product.27');
    Route::get('win-1-500-tax-free-cash-41', 'ProductController@product28')->name('product.28');
    Route::get('win-7-500-tax-free-cash-19', 'ProductController@product29')->name('product.29');
    Route::get('win-1-000-tax-free-cash-76', 'ProductController@product30')->name('product.30');
    Route::get('win-1-000-tax-free-cash-75', 'ProductController@product31')->name('product.31');
    Route::get('win-20-000-cash-7', 'ProductController@product32')->name('product.32');
    Route::get('win-5-000-tax-free-cash-56', 'ProductController@product33')->name('product.33');
    Route::get('win-1-000-tax-free-cash-78', 'ProductController@product34')->name('product.34');
    Route::get('win-1-000-tax-free-cash-77', 'ProductController@product35')->name('product.35');
    
    // TECH & LUXURY COMPETITIONS
    Route::get('win-pepsi-rolex-gmt-master-ii', 'ProductController@product36')->name('product.36');
    Route::get('win-this-smart-home-entertainment-bundle', 'ProductController@product37')->name('product.37');
    Route::get('win-this-11pc-dewalt-tool-bundle-4', 'ProductController@product38')->name('product.38');
    Route::get('win-a-louis-vuitton-alma-bb-bag-reversible-belt-3', 'ProductController@product39')->name('product.39');
    Route::get('win-an-apple-imac-4-5k-24-3', 'ProductController@product40')->name('product.40');
    Route::get('win-an-iphone-14-pro-or-pro-max-40', 'ProductController@product41')->name('product.41');
    Route::get('win-a-samsung-75-4k-smart-tv-2', 'ProductController@product42')->name('product.42');
    Route::get('win-this-ps5-disc-edition-5-2', 'ProductController@product43')->name('product.43');
    Route::get('win-an-xbox-series-x-6', 'ProductController@product44')->name('product.44');
    Route::get('win-a-samsung-galaxy-s23-ultra-8', 'ProductController@product45')->name('product.45');
    Route::get('win-this-us-pro-tools-55-chest-tools-2', 'ProductController@product46')->name('product.46');
    Route::get('win-this-ps5-disc-edition-7', 'ProductController@product47')->name('product.47');
    Route::get('win-this-oculus-quest-2-vr-256gb-4', 'ProductController@product48')->name('product.48');
    Route::get('win-an-xbox-series-x-7', 'ProductController@product49')->name('product.49');
    Route::get('win-this-huge-85-4k-smart-tv-3', 'ProductController@product50')->name('product.50');
    Route::get('win-a-tag-heuer-f1-watch-of-your-choice-for-99p-3', 'ProductController@product51')->name('product.51');
    Route::get('win-an-iphone-14-pro-or-pro-max-41', 'ProductController@product52')->name('product.52');
    Route::get('win-this-ps5-disc-edition-8', 'ProductController@product53')->name('product.53');
    Route::get('win-an-xbox-series-x-8', 'ProductController@product54')->name('product.54');
    
    
    Route::get('win-this-ps5-disc-edition-99', 'ProductController@product55')->name('product.55');
    Route::get('win-an-xbox-series-x-100', 'ProductController@product56')->name('product.56');
    Route::get('win-an-xbox-series-x-99', 'ProductController@product57')->name('product.57');
    Route::get('Wwin-batman-rolex-gmt-master-ii', 'ProductController@product58')->name('product.58');
    Route::get('win-a-louis-vuitton-keepall-bag-2', 'ProductController@product59')->name('product.59');
    Route::get('win-any-wheels-of-your-choice-2', 'ProductController@product60')->name('product.60');
    Route::get('win-a-samsung-galaxy-s23-ultra-6', 'ProductController@product61')->name('product.61');
    Route::get('win-an-iphone-14-pro-or-pro-max-37', 'ProductController@product62')->name('product.62');
    Route::get('win-this-gadget-bundle-2', 'ProductController@product63')->name('product.63');
    Route::get('win-bc-racing-coilovers-for-any-car', 'ProductController@product64')->name('product.64');
    Route::get('win-this-ps5-disc-edition-2', 'ProductController@product65')->name('product.65');
    Route::get('win-this-ps5-disc-edition-1', 'ProductController@product66')->name('product.66');
    Route::get('win-this-oculus-quest-2-vr-256gb-3', 'ProductController@product67')->name('product.67');
    Route::get('win-an-xbox-series-x-2', 'ProductController@product68')->name('product.68');
    Route::get('win-an-xbox-series-x-1', 'ProductController@product69')->name('product.69');
    Route::get('win-a-1oz-gold-bar-3', 'ProductController@product70')->name('product.70');
    Route::get('win-an-iphone-14-pro-or-pro-max-38', 'ProductController@product71')->name('product.71');
    Route::get('win-this-ps5-disc-edition-3', 'ProductController@product72')->name('product.72');
    Route::get('win-an-xbox-series-x-3', 'ProductController@product73')->name('product.73');
    Route::get('win-an-apple-watch-series-8-3', 'ProductController@product74')->name('product.74');
});
