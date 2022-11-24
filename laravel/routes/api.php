<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Models\Category;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/products', function() {
    return Product::all();
});

Route::get('/products/{id}', function($id) {
    return Product::find($id);
});

Route::post('/products', function(Request $request) {
    return Product::create($request->all());
});

Route::put('/products/{id}', function(Request $request, $id) {
    $product = Product::findOrFail($id);
    $product->update($request->all());

    return $product;
});

Route::delete('/products/{id}', function($id) {
    Product::find($id)->delete();

    return '204 Excluído com sucesso!';
});

/*Categories*/

Route::get('/categories', function() {
    return Category::all();
});

Route::get('/categories/{id}', function($id) {
    return Category::find($id);
});

Route::post('/categories', function(Request $request) {
    return Category::create($request->all());
});

Route::put('/categories/{id}', function(Request $request, $id) {
    $product = Category::findOrFail($id);
    $product->update($request->all());

    return $product;
});

Route::delete('/categories/{id}', function($id) {
    Category::find($id)->delete();

    return '204 Excluído com sucesso!';
});

