<?php

use YellowThree\VoyagerExtension\Http\Controllers\FilePondController;

Route::group(['prefix' => config('vextension.assets_path_prefix')], function () {
    Route::group(['as' => 'voyager.'], function () {

        Route::prefix('api')->group(function () {
            Route::patch('/', [FilePondController::class, 'chunk'])->name('filepond.chunk');
            Route::post('/process', [FilePondController::class, 'upload'])->name('filepond.upload');
            Route::delete('/process', [FilePondController::class, 'delete'])->name('filepond.delete');
        });

        /*$extensionController = '\YellowThree\VoyagerExtension\Controllers\VoyagerExtensionController';
        //Load translations
        Route::get('voyager-extension-translations', $extensionController . '@load_translations')->name('voyager_extension_translations');

        //Asset Routes
        Route::get('voyager-extension-assets', ['uses' => $extensionController . '@assets', 'as' => 'voyager_extension_assets']);

        //Assets Others
        Route::get('voyager-extension/{alias}', ['uses' => $extensionController . '@assets_regular', 'as' => 'voyager_extension_assets_regular'])->where('alias', '.*');*/

    });
});
