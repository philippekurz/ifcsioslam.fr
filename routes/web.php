<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function () {
    $index = rand(1,6);
    $urls = ['https://adlen.ifcsioslam.fr',
            'https://dilan.ifcsioslam.fr',
            'https://maxime.ifcsioslam.fr',
            'https://oceane.ifcsioslam.fr',
            'https://nicolas.ifcsioslam.fr',
            'https://loise.ifcsioslam.fr'];
            
    
    $url=$urls[$index];
    return Redirect::to($url);
});
