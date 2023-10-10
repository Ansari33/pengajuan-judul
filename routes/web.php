<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/utama');
});
Route::get('/skp', function () {
    return view('/sk_proposal');
});
Route::get('/ll', function () {
    return view('/m_admin');
});
Route::get('/login_m', function () {
    return view('/login_mahasiswa');
});
Route::get('/adosen', function () {
    return view('/inputdosen');
});

Route::get('/kirim','SmsController@email');
Route::get('/skpb1/{sk}','SmsController@skpb1');
Route::get('/skpb2/{sk}','SmsController@skpb2');

Route::get('/sk_proposal/{stb}','SeminarController@sk_proposal');

Route::post('/addosen','ProposalController@adddosen');
Route::get('/lampiran/{stb}','ProposalController@lampiran');
Route::post('/updosen','ProposalController@updosen');
Route::get('/v_dosen/{id}','ProposalController@vdosen');
Route::get('/d_dosen/{id}','ProposalController@ddosen');
Route::post('/cari','ProposalController@cari1');
Route::get('/print_p','SeminarController@print_p');
Route::get('/print_h','SeminarController@print_h');
Route::get('/print_m','SeminarController@print_m');
Route::get('/dosen','SeminarController@dosen');
Route::get('/goprofilm','ProposalController@goprofilm');
Route::get('/jadwalpm','SeminarController@jadwalpm');
Route::get('/jadwalhm','SeminarController@jadwalhm');
Route::get('/jadwaltm','SeminarController@jadwaltm');
Route::get('/utama','ProposalController@index');
Route::get('/admin','ProposalController@admin');
Route::get('/ajuanjudul_admin','ProposalController@ajuanjudul_admin');
Route::get('/cek/{id}','ProposalController@cek');
Route::get('/tolak/{id}','ProposalController@tolak');
Route::get('/ajukanprop','ProposalController@ajukanprop');
Route::post('/simpanjudul','ProposalController@simpanjudul');
Route::post('/m_login','ProposalController@m_login');
Route::post('/masuk','ProposalController@masuk');
Route::post('/terimajudul','ProposalController@terimajudul');
Route::get('/logout','ProposalController@logout');
Route::get('/diterima','ProposalController@diterima');
Route::get('/ditolak','ProposalController@ditolak');
Route::get('/diterima_admin','ProposalController@diterima_admin');
Route::get('/ajusemprop','SeminarController@ajusemprop');
Route::get('/ajuansemprop_admin','SeminarController@ajuansemprop_admin');
Route::get('/ajusemhas','SeminarController@ajusemhas');
Route::get('/ajuansemhas','SeminarController@ajuansemhas');
Route::get('/ajuansemhas_admin','SeminarController@ajuansemhas_admin');
Route::get('/ajuansemtup_admin','SeminarController@ajuansemtup_admin');
Route::get('/setp/{id}','SeminarController@setjadwalp');
Route::get('/seth/{id}','SeminarController@setjadwalh');
Route::get('/sett/{id}','SeminarController@setjadwalt');
Route::post('/addsemprop','SeminarController@addsemprop');
Route::post('/addsemhas','SeminarController@addsemhas');
Route::post('/addsemtutup','SeminarController@addsemtup');
Route::get('/ajuansemprop','SeminarController@ajuansemprop');
Route::post('/setsemprop','SeminarController@setsemprop');
Route::post('/setsemhas','SeminarController@setsemhas');
Route::post('/setsemtup','SeminarController@setsemtup');
Route::get('/jadsemprop','SeminarController@jadsemprop');
Route::get('/jadsemprop_admin','SeminarController@jadsemprop_admin');
Route::get('/jadsemtup_admin','SeminarController@jadsemtup_admin');
Route::get('/jadsemhas','SeminarController@jadsemhas');
Route::get('/jadsemhas_admin','SeminarController@jadsemhas_admin');
Route::get('/ujikanp/{id}','SeminarController@ujikanp');
Route::get('/ujikanh/{id}','SeminarController@ujikanh');
Route::get('/ujikanm/{id}','SeminarController@ujikanm');
Route::get('/terujip','SeminarController@terujip');
Route::get('/terujih','SeminarController@terujih');
Route::get('/terujim','SeminarController@terujim');
Route::get('/detail/{id}','SeminarController@detail');



Route::post('/tambah_jadwal','Jadwal_Controller@tambah_jadwal');
Route::post('/dofilter','Jadwal_Controller@dofilter');
Route::get('/ubah/{id}','Jadwal_Controller@ubah');
Route::get('/afterfilter','Jadwal_Controller@afterfilter');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
