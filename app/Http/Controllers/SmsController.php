<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo;
use Mail;
use DB;
use PDF;
use Storage;
class SmsController extends Controller
{
    public function kirim()
    {
    	Nexmo::message()->send([
    		'to' => '6282346450325',
    		'from' => 'Vonage APIs',
    		'text' => 'tes.....'
    	]);
    }

    public function email()
    {
    //	return view('SK');
   // 	$print = PDF::loadHTML(view('SK'));
   // return $sk = $print->stream($print);
    	
    	 //return  Storage::download($sk,public_path());
// $user = DB::table('admin')->first();
// $data = DB::table('dosen')->paginate(25);
             Mail::raw( function ($m) use ($user) {
                 $m->from('putraansari05@gmail.com', 'Your Application');

                 $m->to('zfykhar@gmail.com', 'Ansari')->subject('Your Reminder!');
             });
    }

    public function skpb1($stb){
        $judul = DB::table('pengajuan_judul')->where('stambuk',$stb)->where('status','lolos')->first();
        //return $judul->id;
        $bimbingan = DB::table('bimbingan')->where('judul', strval($judul->id))->first();
        $dosen = DB::table('dosen')->where('id', strval($bimbingan->dosen))->first();
        $dekan = DB::table('dosen')->where('pangkat', 'dekan')->first();
        $data['judul'] = $judul;
        $data['dekan'] = $dekan;
        $data['pembimbing'] = $dosen;
        $data['sk'] = $bimbingan;
        return view('SK',['data' => $data]);

    }
    public function skpb2($stb){
        $judul = DB::table('pengajuan_judul')->where('stambuk',$stb)->where('status','lolos')->first();
        //return $judul->id;
        $bimbingan = DB::table('bimbingan')->where('judul', strval($judul->id))->first();
        $dosen = DB::table('dosen')->where('id', strval($bimbingan->dosen2))->first();
        $dekan = DB::table('dosen')->where('pangkat', 'dekan')->first();
        $data['judul'] = $judul;
        $data['dekan'] = $dekan;
        $data['pembimbing'] = $dosen;
        $data['sk'] = $bimbingan;
        return view('SK',['data' => $data]);

    }
}
