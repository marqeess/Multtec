<?php


// Rota inicial ---------------------------------------------------------------

Route::get('/' , 'SiteController@inicio')->name('siteinicio');

// Rota de contato ------------------------------------------------------------

Route::get('contato' , 'SiteController@contato')->name('sitecontato');

// Rota sobre -----------------------------------------------------------------

Route::get('sobre' , 'SiteController@sobre')->name('sitesobre');


// Rota de administração do site ----------------------------------------------

Route::middleware(['auth'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::resource('contato', 'ContatoController');
        Route::resource('servicos', 'ServicoController');

    });

});

// Rota de acesso a administração

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
