<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserApprovalController;

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

/* Grupo de Rotas Autenticadas */

Route::middleware(['auth'])->group(function () {
  /* Manager Dashboard  */
  Route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

  Route::middleware(['Administrador'])->group(function () {

    /* User */
    Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
    Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(['Administrador']);

    Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(['Administrador']);;
    Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(['Administrador']);;

    Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
    Route::get('admin/signup/logs', ['as' => 'admin.signup.log', 'uses' => 'Admin\CredencialController@log']);

    Route::post('/user-approve/{id}', [UserController::class, 'approve'])->name('admin.user.approve');


  
  /**about */
  Route::get('admin/O-Director-do-Inamet/show', ['as' => 'admin.inametPrincipal.show', 'uses' => 'Admin\InametPrincipalController@show']);
  Route::get('admin/O-Director-do-Inamet/edit/{id}', ['as' => 'admin.inametPrincipal.edit', 'uses' => 'Admin\InametPrincipalController@edit']);
  Route::put('admin/O-Director-do-Inamet/update/{id}', ['as' => 'admin.inametPrincipal.update', 'uses' => 'Admin\InametPrincipalController@update']);




  /* gallery */
  Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@list']);
  Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);
  Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
  Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);
  Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
  Route::put('admin/gallery/update/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);
  Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
  /* end gallery */

  /* imageGallery */
  Route::get('admin/imageGallery/create/{id}', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
  Route::post('admin/imageGallery/store/{id}', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);
  Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
  /* End imageGallery */

  /**about */
  Route::get('admin/about-inamet/show', ['as' => 'admin.aboutInamet.show', 'uses' => 'Admin\AboutInametController@show']);
  Route::get('admin/about-inamet/edit/{id}', ['as' => 'admin.aboutInamet.edit', 'uses' => 'Admin\AboutInametController@edit']);
  Route::put('admin/about-inamet/update/{id}', ['as' => 'admin.aboutInamet.update', 'uses' => 'Admin\AboutInametController@update']);


  /* slideshow */
  Route::get('admin/slideshow/index', ['as' => 'admin.slideshow.index', 'uses' => 'Admin\SlideShowController@list']);
  Route::get('admin/slideshow/show/{id}', ['as' => 'admin.slideshow.show', 'uses' => 'Admin\SlideShowController@show']);
  Route::get('admin/slideshow/create', ['as' => 'admin.slideshow.create', 'uses' => 'Admin\SlideShowController@create']);
  Route::post('admin/slideshow/store', ['as' => 'admin.slideshow.store', 'uses' => 'Admin\SlideShowController@store']);
  Route::get('admin/slideshow/edit/{id}', ['as' => 'admin.slideshow.edit', 'uses' => 'Admin\SlideShowController@edit']);
  Route::put('admin/slideshow/update/{id}', ['as' => 'admin.slideshow.update', 'uses' => 'Admin\SlideShowController@update']);
  Route::get('admin/slideshow/delete/{id}', ['as' => 'admin.slideshow.delete', 'uses' => 'Admin\SlideShowController@destroy']);
  /* end slideshow */



  /* configuration */
  Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);
  Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
  Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
  /* end configuration */

  /* faq */
  Route::get('admin/faq/index', ['as' => 'admin.faq.index', 'uses' => 'Admin\FaqController@list']);
  Route::get('admin/faq/show/{id}', ['as' => 'admin.faq.show', 'uses' => 'Admin\FaqController@show']);
  Route::get('admin/faq/create', ['as' => 'admin.faq.create', 'uses' => 'Admin\FaqController@create']);
  Route::post('admin/faq/store', ['as' => 'admin.faq.store', 'uses' => 'Admin\FaqController@store']);
  Route::get('admin/faq/edit/{id}', ['as' => 'admin.faq.edit', 'uses' => 'Admin\FaqController@edit']);
  Route::put('admin/faq/update/{id}', ['as' => 'admin.faq.update', 'uses' => 'Admin\FaqController@update']);
  Route::get('admin/faq/delete/{id}', ['as' => 'admin.faq.delete', 'uses' => 'Admin\FaqController@destroy']);
  /* end faq */


  /* doc */
  Route::get('admin/doc/index', ['as' => 'admin.doc.index', 'uses' => 'Admin\DocController@list']);
  Route::get('admin/doc/show/{id}', ['as' => 'admin.doc.show', 'uses' => 'Admin\DocController@show']);
  Route::get('admin/doc/create', ['as' => 'admin.doc.create', 'uses' => 'Admin\DocController@create']);
  Route::post('admin/doc/store', ['as' => 'admin.doc.store', 'uses' => 'Admin\DocController@store']);
  Route::get('admin/doc/edit/{id}', ['as' => 'admin.doc.edit', 'uses' => 'Admin\DocController@edit']);
  Route::put('admin/doc/update/{id}', ['as' => 'admin.doc.update', 'uses' => 'Admin\DocController@update']);
  Route::get('admin/doc/delete/{id}', ['as' => 'admin.doc.delete', 'uses' => 'Admin\DocController@destroy']);
  /* end doc */


  /* video */
  Route::get('admin/video/index', ['as' => 'admin.video.index', 'uses' => 'Admin\VideoController@list']);
  Route::get('admin/video/show/{id}', ['as' => 'admin.video.show', 'uses' => 'Admin\VideoController@show']);
  Route::get('admin/video/create', ['as' => 'admin.video.create', 'uses' => 'Admin\VideoController@create']);
  Route::post('admin/video/store', ['as' => 'admin.video.store', 'uses' => 'Admin\VideoController@store']);
  Route::get('admin/video/edit/{id}', ['as' => 'admin.video.edit', 'uses' => 'Admin\VideoController@edit']);
  Route::put('admin/video/update/{id}', ['as' => 'admin.video.update', 'uses' => 'Admin\VideoController@update']);
  Route::get('admin/video/delete/{id}', ['as' => 'admin.video.delete', 'uses' => 'Admin\VideoController@destroy']);
  /* end video */




  /* news */
  Route::get('admin/news/index', ['as' => 'admin.news.index', 'uses' => 'Admin\NewsController@list']);
  Route::get('admin/news/show/{id}', ['as' => 'admin.news.show', 'uses' => 'Admin\NewsController@show']);
  Route::get('admin/news/create', ['as' => 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
  Route::post('admin/news/store', ['as' => 'admin.news.store', 'uses' => 'Admin\NewsController@store']);
  Route::get('admin/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
  Route::put('admin/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);
  Route::get('admin/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@destroy']);
  /* end news */

    /* publication */
  Route::get('admin/publicacoes/index', ['as' => 'admin.publication.index', 'uses' => 'Admin\PublicationController@list']);
  Route::get('admin/publicacoes/show/{id}', ['as' => 'admin.publication.show', 'uses' => 'Admin\PublicationController@show']);
  Route::get('admin/publicacoes/create', ['as' => 'admin.publication.create', 'uses' => 'Admin\PublicationController@create']);
  Route::post('admin/publicacoes/store', ['as' => 'admin.publication.store', 'uses' => 'Admin\PublicationController@store']);
  Route::get('admin/publicacoes/edit/{id}', ['as' => 'admin.publication.edit', 'uses' => 'Admin\PublicationController@edit']);
  Route::put('admin/publicacoes/update/{id}', ['as' => 'admin.publication.update', 'uses' => 'Admin\PublicationController@update']);
  Route::get('admin/publicacoes/delete/{id}', ['as' => 'admin.publication.delete', 'uses' => 'Admin\PublicationController@destroy']);
  /* end publication */


  
    /* project */
  Route::get('admin/projecto/index', ['as' => 'admin.project.index', 'uses' => 'Admin\ProjectController@list']);
  Route::get('admin/projecto/show/{id}', ['as' => 'admin.project.show', 'uses' => 'Admin\ProjectController@show']);
  Route::get('admin/projecto/create', ['as' => 'admin.project.create', 'uses' => 'Admin\ProjectController@create']);
  Route::post('admin/projecto/store', ['as' => 'admin.project.store', 'uses' => 'Admin\ProjectController@store']);
  Route::get('admin/projecto/edit/{id}', ['as' => 'admin.project.edit', 'uses' => 'Admin\ProjectController@edit']);
  Route::put('admin/projecto/update/{id}', ['as' => 'admin.project.update', 'uses' => 'Admin\ProjectController@update']);
  Route::get('admin/projecto/delete/{id}', ['as' => 'admin.project.delete', 'uses' => 'Admin\ProjectController@destroy']);
  /* end project */

  });

});
