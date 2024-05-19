<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web_content');
});

// Rutas referentes a las secciones del Menu bar: Home, Recursos, Funcionamiento y Prueba NeverLost:
Route::get('/resources', function(){
    return view('menuBarSection_content.recursos');
});

Route::get('/running', function(){
    return view('menuBarSection_content.funcionamiento');
});

Route::get('/try_me', function(){
    return view('menuBarSection_content.pruebaNeverlost');
});

// Rutas referentes al Login y el Registro, y sus diferentes opciones:
Route::get('/login', function(){
    return view('login-register.login');
});

Route::get('/recover_password', function(){
    return view('login-register.recover_password');
});

Route::get('/register', function(){
    return view('login-register.register');
});

Route::get('/company_register', function(){
    return view('login-register.company_register');
});

// Rutas de las secciones del FOOTER: Empresa y Legalidad:
Route::get('/technical_support_center', function(){
    return view('footerSection_content.centro_soporte');
});

Route::get('/contact', function(){
    return view('footerSection_content.contacto');
});

Route::get('/suggestions_views', function(){
    return view('footerSection_content.sugerencias_opiniones');
});

Route::get('/privacy_policy', function(){
    return view('footerSection_content.politica_privacidad');
});

Route::get('/cookies_policy', function(){
    return view('footerSection_content.politica_cookies');
});

Route::get('/terms_and_conditions', function(){
    return view('footerSection_content.terminos_condiciones');
});