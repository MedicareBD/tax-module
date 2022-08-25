<?php

use Modules\Tax\Http\Controllers\TaxController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function () {
    Route::resource('taxes', TaxController::class);
    Route::get('taxes/settings', [TaxController::class, 'settings'])->name('taxes.settings');
});
