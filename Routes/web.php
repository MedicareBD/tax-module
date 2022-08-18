<?php

use Modules\Tax\Http\Controllers\TaxController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function (){
    Route::resource('taxs', TaxController::class);
    Route::get('taxs/settings', [TaxController::class, 'settings'])->name('taxs.settings');
});
