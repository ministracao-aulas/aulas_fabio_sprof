<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
    return view('welcome');
});

Route::get('/createfakeproduct',            'ProductsController@createFakeProduct')->name('create_fake_product');
Route::get('/products',                     'ProductsController@index')->name('product_list');
Route::get('/product/{id}',                 'ProductsController@show')->name('product_detail');
Route::get('/delete/product/{id}',          'ProductsController@destroy')->name('product_delete');

Route::get('/aula/rotas/{nome}/{sobrenome}',    function($f_nome, $l_nome)
{
    echo "Olá ".$f_nome." ".$l_nome;
})->name('nome_sn');

Route::get('/produtos/{sessao}/{tag}',    function($sessao, $tag)
{
    $sessoes = [
       'casa_e_banho' => ['title' => 'Casa e Banho', 'tags'=> ['promo' , 'casa', 'banho']],
       'construcao' => ['title' => 'Construção', 'tags'=> ['promo' , 'casa', 'banho']],
       'comercio' => ['title' => 'Comércio', 'tags'=> ['promo' , 'casa', 'banho']],
       'pets' => ['title' => 'Pets', 'tags'=> ['promo' , 'casa', 'banho']],
    ];

    echo "Listando produtos da sessão: " . $sessoes[$sessao]['title'].", que estão com a tag $tag";
    echo "Listando produtos da sessão: " . $sessoes[$sessao]['title'].", que estão com a tag $tag";

})->name('produtos_por_sessao_e_tag');
