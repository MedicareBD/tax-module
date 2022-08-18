<?php

use Modules\Tax\Http\Controllers\TaxController;

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth', 'admin']], function (){
    Route::resource('tax', TaxController::class);
});
