<?php

use Illuminate\Support\Facades\Route;

//........................................................... RUTAS PARA NAVEGAR DE FORMA INTERNA EN LA PÁGINA WEB
Route::get('/', function () {
    return view('web_content');
})->name('Home');

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

//........................................................... RUTAS DE LOS CONTROLADORES, PARA ALMACENAR/ENVIAR DATOS A LA BASE DE DATOS

use App\Http\Controllers\UserController;
Route::post('/create_user', [UserController::class, 'Create_user'])->name('creacion_usuario');

use App\Http\Controllers\CompanyController;
Route::post('/create_company', [CompanyController::class, 'Create_company'])->name('creacion_empresa');

use App\Http\Controllers\Log_inController;
Route::post('/create_session', [Log_inController::class, 'Create_session'])->name('creacion_sesion');

use App\Http\Controllers\Technical_supportController;
Route::post('/consultation_technical_support', [Technical_supportController::class, 'Send_consultation'])->name('registro_consulta');

use App\Http\Controllers\Demo_requestsController;
Route::post('/project_description', [Demo_requestsController::class, 'Send_projectDescription'])->name('registro_descripcion_proyecto');

use App\Http\Controllers\SuggestionsController;
Route::post('/suggestions&views', [SuggestionsController::class, 'Send_suggestions'])->name('registro_sugerencias');

use App\Http\Controllers\ContactsController;
Route::post('/contact', [ContactsController::class, 'Registration_contact'])->name('registro_contacto');