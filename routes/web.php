<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome', ['header' => 'Home page']);
});

Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index']);

Route::resource('posts', \App\Http\Controllers\PostsController::class);

//$router->get('/about', 'controllers/about.php')
//	->get('/contact', 'controllers/contact.php')
//	->get('/', 'controllers/index.php')
//	->get('/posts', 'controllers/posts/index.php', [\Core\Middleware\Authenticated::class])
//	->get('/post', 'controllers/posts/view.php')
//	->get('/posts/create', 'controllers/posts/create.php')
//	->post('/posts/store', 'controllers/posts/store.php')
//	->delete('/post', 'controllers/posts/destroy.php')
//	->get('/post/edit', 'controllers/posts/edit.php')
//	->put('/post', 'controllers/posts/update.php')
//	->get('/register', 'controllers/register/create.php')
//	->post('/register', 'controllers/register/store.php')
//	->get('/signin', 'controllers/signin/create.php')
//	->post('/signin', 'controllers/signin/store.php')
//	->get('/logout', 'controllers/signin/destroy.php')
