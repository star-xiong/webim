<?php

use Encore\WEBIm\Http\Controllers\WEBImController;

Route::get('webim', WEBImController::class.'@index');