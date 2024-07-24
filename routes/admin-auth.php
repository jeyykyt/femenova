<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\BlogAdminController;
use App\Http\Controllers\BlogUserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

Route::prefix('admin')->middleware('guest:admin')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])->name('admin.register');
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('admin.login');
    Route::post('login', [LoginController::class, 'store']);

});

Route::prefix('admin')->middleware('auth:admin')->group(function () {

//    Route::get('/dashboard', function () {
//        return view('admin.dashboard-form');})->name('admin.dashboard');


    Route::post('logout', [LoginController::class, 'destroy'])->name('admin.logout');
});



Route::prefix('admin/forms')->middleware('auth:admin')->group(function () {

    Route::get('/achievement', function () {
        return view('components.forms.Achievement_Form');})->name('admin.forms.achievement');

    Route::get('/educational', function () {
        return view('components.forms.Educational_Form');})->name('admin.forms.educational');

    Route::get('/testimonial', function () {
        return view('components.forms.Testimonial_Form');})->name('admin.forms.testimonial');

    Route::get('/video', function () {
        return view('components.forms.Video_Form');})->name('admin.forms.video');

});

//Route::resource('book', BookController::class)->middleware('auth:admin');



Route::middleware('auth:admin')->group(function () {
 //   Route::get('book', [BookController::class, 'index'])->name('book.index');
    Route::get('book/create', [BookController::class, 'create'])->name('book.create');
//    Route::post('book', [BookController::class, 'store'])->name('book.store');
    Route::get('book/{book}', [BookController::class, 'show'])->name('book.show');
    Route::get('book/{book}/edit', [BookController::class, 'edit'])->name('book.edit');
    Route::put('book/{book}', [BookController::class, 'update'])->name('book.update');
    Route::delete('book/{book}', [BookController::class, 'destroy'])->name('book.destroy');
});


Route::prefix('admin/dashboard/')->middleware('auth:admin')->group(function () {
//    book
    Route::post('book', [BookController::class, 'store'])->name('book.store');
    Route::get('/books', [BookController::class, 'dashboardBooks'])->name('admin.dashboard.books');
    Route::get('/books/search', [BookController::class, 'search'])->name('book.search');


//    video
    Route::post('video', [VideoController::class, 'store'])->name('video.store');
    Route::get('/videos', [VideoController::class, 'dashboardVideos'])->name('admin.dashboard.videos');
    Route::get('/videos/search', [VideoController::class, 'search'])->name('video.search');


    // achievement
    Route::post('achievement', [AchievementController::class, 'store'])->name('achievement.store');
    Route::get('/achievements', [AchievementController::class, 'dashboardAchievements'])->name('admin.dashboard.achievements');
    Route::get('/achievements/search', [AchievementController::class, 'search'])->name('achievement.search');

    // testimonial
    Route::post('testimonial', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('/testimonials', [TestimonialController::class, 'dashboardTestimonials'])->name('admin.dashboard.testimonials');
    Route::get('/testimonials/search', [TestimonialController::class, 'search'])->name('testimonial.search');

    // contact
    Route::get('/contact/search', [ContactController::class, 'search'])->name('contact.search');


//    Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
//    Route::get('/contacts', [ContactController::class, 'index'])->name('admin.dashboard.testimonials'); ---> dont mind this

});

Route::middleware('auth:admin')->group(function () {
    //   Route::get('video', [VideoController::class, 'index'])->name('video.index');
    Route::get('video/create', [VideoController::class, 'create'])->name('video.create');
//    Route::post('video', [VideoController::class, 'store'])->name('video.store');
    Route::get('video/{video}', [VideoController::class, 'show'])->name('video.show');
    Route::get('video/{video}/edit', [VideoController::class, 'edit'])->name('video.edit');
    Route::put('video/{video}', [VideoController::class, 'update'])->name('video.update');
    Route::delete('video/{video}', [VideoController::class, 'destroy'])->name('video.destroy');
});

Route::middleware('auth:admin')->group(function () {
    //   Route::get('achievement', [AchievementController::class, 'index'])->name('achievement.index');
    Route::get('achievement/create', [AchievementController::class, 'create'])->name('achievement.create');
//    Route::post('achievement', [AchievementController::class, 'store'])->name('achievement.store');
    Route::get('achievement/{achievement}', [AchievementController::class, 'show'])->name('achievement.show');
    Route::get('achievement/{achievement}/edit', [AchievementController::class, 'edit'])->name('achievement.edit');
    Route::put('achievement/{achievement}', [AchievementController::class, 'update'])->name('achievement.update');
    Route::delete('achievement/{achievement}', [AchievementController::class, 'destroy'])->name('achievement.destroy');
});


Route::middleware('auth:admin')->group(function () {
    //   Route::get('testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');
    Route::get('testimonial/create', [TestimonialController::class, 'create'])->name('testimonial.create');
//    Route::post('testimonial', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('testimonial/{testimonial}', [TestimonialController::class, 'show'])->name('testimonial.show');
    Route::get('testimonial/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::put('testimonial/{testimonial}', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::delete('testimonial/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
//    Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('contact/{contact}', [ContactController::class, 'show'])->name('contact.show');
//    Route::get('contact/{contact}/edit', [ContactController::class, 'edit'])->name('contact.edit');
//    Route::put('contact/{contact}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('contact/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');

    Route::get('/contacts/download/{file}', [ContactController::class, 'download'])->name('contacts.download');


});

Route::middleware('auth:admin')->group(function () {


    Route::get('admin/dashboard', [BlogAdminController::class, 'index'])->name('admin.dashboard');


    Route::get('blogAdmin/{blogAdmin}', [BlogAdminController::class, 'show'])->name('blogAdmin.show');
//    Route::get('blogAdmin/{blogAdmin}/edit', [BlogAdminController::class, 'edit'])->name('blogAdmin.edit');
    Route::put('blogAdmin/{blogAdmin}', [BlogAdminController::class, 'update'])->name('blogAdmin.update');
    Route::delete('blogAdmin/{blogAdmin}', [BlogAdminController::class, 'destroy'])->name('blogAdmin.destroy');

    Route::get('blogAdmin', [BlogAdminController::class, 'index'])->name('blogAdmin.index');
    Route::post('blogAdmin', [BlogAdminController::class, 'store'])->name('blogAdmin.store');

    Route::get('myBlog', [BlogAdminController::class, 'myAdminBlog'])->name('blogAdmin.myBlog');

    Route::get('myBlog/search', [BlogAdminController::class, 'search_myBlogs'])->name('blogAdmin.search_myBlogs');
    Route::get('admin/dashboard/search', [BlogAdminController::class, 'search_adminDashboard'])->name('blogAdmin.search_adminDashboard');


});

//Route::middleware('auth')->group(function () {
//    Route::get('blogAdmin', [BlogAdminController::class, 'index'])->name('blogAdmin.index');
//});

