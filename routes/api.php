<?php

use App\Jobs\CompanyCreated;
use Illuminate\Support\Facades\Route;

Route::get('/teste' , function(){
    CompanyCreated::dispatch('lucasfbr03@gmail.com')->onQueue('queue_email');

    return response()->json(['message' => 'Job enviado!']);
});

Route::get('/' , function(){
    return response()->json(['message' => 'Micro Email rodando com sucesso!']);
});

