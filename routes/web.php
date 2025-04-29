<?php

use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'namespace' => 'Site',
        'middleware' => ['localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {
        ////////////////////////////////////////////////////////////
        /// any
        Route::get('', function () {
            return view('site.index');
        })
            ->where(['any' => '.*'])
            ->name('index');

        Route::get('/', [SiteController::class, 'index'])->name('index');

        //reload captcha
        Route::get('/reload-captcha', [SiteController::class, 'reloadCaptcha'])->name('reload.captcha');

        //contact
        Route::post('/send-contact', [SiteController::class, 'sendContact'])->name('send.contact');

        Route::get('/courses', [SiteController::class, 'courses'])->name('courses');
        Route::get('/courses-paging', [SiteController::class, 'coursesPaging'])->name('courses.paging');

        // articles
        Route::get('/articles', [SiteController::class, 'articles'])->name('articles');
        Route::get('/articles-paging', [SiteController::class, 'articlesPaging'])->name('articles.paging');
        Route::get('/article/{val?}', [SiteController::class, 'article'])->name('article');

        // faq
        Route::get('/faq', [SiteController::class, 'faq'])->name('faq');

        // //trainings
        // Route::get('/trainings', [SiteController::class, 'trainings'])->name('trainings');
        // Route::get('/training-paging', [SiteController::class, 'trainingsPaging'])->name('trainings.paging');

        // // videos
        // Route::get('/videos', [SiteController::class, 'videos'])->name('videos');
        // Route::get('/videos-paging', [SiteController::class, 'videosPaging'])->name('videos.paging');

        // // photos
        // Route::get('/photo-albums', [SiteController::class, 'photoAlbums'])->name('photo.albums');
        // Route::get('/photo-albums-paging', [SiteController::class, 'photoAlbumsPaging'])->name('photo.albums.paging');

        // // news
        // Route::get('/news', [SiteController::class, 'news'])->name('news');
        // Route::get('/news-paging', [SiteController::class, 'newsPaging'])->name('news.paging');
        // Route::get('/new/{val?}', [SiteController::class, 'new'])->name('new');

        // // external link
        // Route::get('/link/{link}/{id}', [SiteController::class, 'externalLink'])->name('site.external.link');
    },
);
