<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\BlogUserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/dash', function () {
    return view('admin/dashboards/Achievement');
});
Route::get('/df', function () {
    return view('admin/dashboard-form');
});
Route::get('/educ', [BookController::class, 'index']);
//Route::get('/educ', [VideoController::class, 'index']);

Route::get('/achievements', [AchievementController::class, 'index'])->name('achievements');



//Route::get('/testimonials', function () {
//    return view('testimonials');
//});


Route::get('/about', function () {
    return view('about');
});

Route::get('/contactus', function () {
    return view('contactus');
});

Route::get('/sample', function () {
    return view('sample');
});

Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonial.index');


//Route::get('/blog-user', function () {
//    return view('blog-user');
//})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/blog-admin', [BlogAdminController::class, 'user_view'])->name('blog-admin');
    Route::get('/blog-admin/search', [BlogAdminController::class, 'search_view'])->name('blog-admin.view.search');

});


Route::middleware('auth')->group(function () {
    Route::get('blogUser', [BlogUserController::class, 'index'])->name('dashboard');
    Route::get('blogUser/create', [BlogUserController::class, 'create'])->name('blogUser.create');
    Route::post('blogUser', [BlogUserController::class, 'store'])->name('blogUser.store');

    Route::get('myblogs', [BlogUserController::class, 'show'])->name('blogUser.show');

    Route::get('blogUser/{blogUser}/edit', [BlogUserController::class, 'edit'])->name('blogUser.edit');
    Route::put('blogUser/{blogUser}', [BlogUserController::class, 'update'])->name('blogUser.update');
    Route::delete('blogUser/{blogUser}', [BlogUserController::class, 'destroy'])->name('blogUser.destroy');

    Route::get('/blogUser/search', [BlogUserController::class, 'search_view'])->name('blogUser.view.search');
    Route::get('/myBlogs/search', [BlogUserController::class, 'myBlogs_search_view'])->name('myBlogs.view.search');




});


require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';

