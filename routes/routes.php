<?php

use YellowThree\VoyagerExtension\Http\Controllers\FilePondController;

Route::group(['prefix' => config('vextension.assets_path_prefix','admin')], function () {
    Route::group(['as' => 'voyager.'], function () {

        Route::prefix('vextension')->name('vextension.')->group(function () {
            Route::prefix('filepond')->name('filepond.')->group(function () {
            Route::patch('/', [FilePondController::class, 'chunk'])->name('chunk');
            Route::post('/process', [FilePondController::class, 'upload'])->name('upload');
            Route::delete('/process', [FilePondController::class, 'delete'])->name('delete');
        });
    });

        $namespacePrefix = '\YellowThree\VoyagerExtension\Http\Controllers\\';
        $extensionController = '\YellowThree\VoyagerExtension\Http\Controllers\VoyagerExtensionController';
        Route::get('vextension-assets', ['uses' => $namespacePrefix.'VoyagerExtensionController@assets', 'as' => 'vextension_assets']);

        /*$extensionController = '\YellowThree\VoyagerExtension\Controllers\VoyagerExtensionController';
        //Load translations
        Route::get('voyager-extension-translations', $extensionController . '@load_translations')->name('voyager_extension_translations');

        //Asset Routes
        Route::get('voyager-extension-assets', ['uses' => $extensionController . '@assets', 'as' => 'voyager_extension_assets']);

        //Assets Others
        Route::get('voyager-extension/{alias}', ['uses' => $extensionController . '@assets_regular', 'as' => 'voyager_extension_assets_regular'])->where('alias', '.*');*/

    });
});
