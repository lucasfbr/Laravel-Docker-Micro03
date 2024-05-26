<?php

use Illuminate\Support\Facades\Route;

Route::get('/' , function(){
    return response()->json(['message' => 'Micro Email rodando com sucesso!']);
});

