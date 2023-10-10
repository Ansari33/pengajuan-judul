<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SiswaExport;
use Mail;
class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function dosen()
    {
       $data = DB::table('dosen')->paginate(25);
       return view('dosen',['data' => $data]);
    }
    public function index()
    {
        //
        
    }
    public function ajusemprop()
    {
        //
        $data = DB::table('pengajuan_judul')->where('status','lolos')->get();
        return view('ajusemprop',['data' => $data]);
    }

    public function ajusemhas()
    {
        //
        $data = DB::table('pengajuan_judul')->where('status','lolos')->get();
        return view('ajusemhas',['data' => $data]);
    }

    public function addsemprop(Request $req)
    {

        $data =[
            'stambuk' => $req->stambuk,
            'nama' => $req->nama,
            'judul' => $req->judul,
            'pembimbing1' => $req->pembimbing1,
            'pembimbing2' => $req->pembimbing2,
            'tipe' => 'proposal',
            'status' => 'mengajukan'
        ];
        //return dd(Session::get('loginm'));
        //return dd($data);
        DB::table('seminar')->insert($data);
        return redirect('/goprofilm');

    }

    public function addsemhas(Request $req)
    {
        $dataa = DB::table('seminar')->where('status','diujikan')->where('tipe','proposal')->where('stambuk',$req->stambuk)->where('judul',$req->judul)->first();      
        $data =[
            'stambuk' => $req->stambuk,
            'nama' => $dataa->nama,
            'judul' => $req->judul,
            'pembimbing1' => $dataa->pembimbing1,
            'pembimbing2' => $dataa->pembimbing2,
            'penguji1' => $dataa->penguji1,
            'penguji2' => $dataa->penguji2,
            'penguji3' => $dataa->penguji3,
            
            'tipe' => 'hasil',
            'status' => 'mengajukan'
        ];
        //return dd($data);
        DB::table('seminar')->insert($data);
        return redirect('/goprofilm');

    }
    public function addsemtup(Request $req)
    {
        $dataa = DB::table('seminar')->where('status','diujikan')->where('tipe','hasil')->where('stambuk',$req->stambuk)->where('judul',$req->judul)->first();      
        $data =[
            'stambuk' => $req->stambuk,
            'nama' => $dataa->nama,
            'judul' => $req->judul,
            'pembimbing1' => $dataa->pembimbing1,
            'pembimbing2' => $dataa->pembimbing2,
            'penguji1' => $dataa->penguji1,
            'penguji2' => $dataa->penguji2,
            'penguji3' => $dataa->penguji3,
            
            'tipe' => 'tutup',
            'status' => 'mengajukan'
        ];
        //return dd($data);
        DB::table('seminar')->insert($data);
        return redirect('/goprofilm');

    }

    public function ajuansemprop()
    {
        $Data = DB::table('seminar')->where('tipe','proposal')->where('status','mengajukan')->get();
        return view('ajuansemprop',['seminar' => $Data]);
    }

    public function ajuansemhas()
    {
        $Data = DB::table('seminar')->where('tipe','hasil')->where('status','mengajukan')->get();
        return view('ajuansemhas',['seminar' => $Data]);
    }

    public function ajuansemhas_admin()
    {   
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }

        $Data = DB::table('seminar')->where('tipe','hasil')->where('status','mengajukan')->get();
        return view('ajuansemhas_admin',['seminar' => $Data]);
    }

    public function ajuansemtup_admin()
    {   
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }

        $Data = DB::table('seminar')->where('tipe','tutup')->where('status','mengajukan')->get();
        return view('ajuansemtup_admin',['seminar' => $Data]);
    }

    public function ajuansemprop_admin()
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $Data = DB::table('seminar')->where('tipe','proposal')->where('status','mengajukan')->get();
        return view('ajuansemprop_admin',['seminar' => $Data]);
    }

    public function setjadwalp($id)
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $Data = DB::table('seminar')->where('id',$id)->first();
        $Data2 = DB::table('dosen')->get();
        return view('setjadwalp',['data' => $Data,'data2' =>$Data2]);
    }

    public function setjadwalh($id)
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $Data = DB::table('seminar')->where('id',$id)->first();
        $Data2 = DB::table('dosen')->get();
        return view('setjadwalh',['data' => $Data,'data2' =>$Data2]);
        //return view('setjadwalh',['data' => $Data]);
    }

     public function setjadwalt($id)
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $Data = DB::table('seminar')->where('id',$id)->first();
        $Data2 = DB::table('dosen')->get();
        return view('setjadwalt',['data' => $Data,'data2' =>$Data2]);
        //return view('setjadwalt',['data' => $Data]);
    }


    public function jadsemprop()
    {
        $Data = DB::table('seminar')->where('status','terjadwal')->where('tipe','proposal')->get();
        return view('jadwalsemprop',['data' => $Data]);
    }

    public function jadsemprop_admin()
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $Data = DB::table('seminar')->where('status','terjadwal')->where('tipe','proposal')->get();
        return view('jadsemprop_admin',['data' => $Data]);
    }

    public function jadsemhas()
    {
        $Data = DB::table('seminar')->where('status','terjadwal')->where('tipe','hasil')->get();
        return view('jadwalsemhas',['data' => $Data]);
    }

    public function jadsemhas_admin()
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $Data = DB::table('seminar')->where('status','terjadwal')->where('tipe','hasil')->get();
        return view('jadsemhas_admin',['data' => $Data]);
    }

    public function jadsemtup_admin()
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $Data = DB::table('seminar')->where('status','terjadwal')->where('tipe','tutup')->get();
        return view('jadsemtup_admin',['data' => $Data]);
    }

    // public function setsemprop(Request $req)
    // {
    //     if (!Session::get('masuk')) {
    //         # code...
    //         return redirect('login');
    //     }
    //     //return dd($req->id);
    //     $data = [
    //         'ketua' => $req->ketua,
    //         'penguji1' => $req->penguji1,
    //         'penguji2' => $req->penguji2,
    //         'penguji3' => $req->penguji3,
    //         'status' => 'terjadwal',
    //         'jadwal' => $req->tanggal.' '.$req->jam
    //     ];
    //     $Data = DB::table('seminar')->where('id',$req->id)->update($data);
    //     return redirect('/admin');
    // }

    public function setsemprop(Request $req)
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        //return dd($req->id);
        $data = [
            'ketua' => $req->ketua,
            'penguji1' => $req->penguji1,
            'penguji2' => $req->penguji2,
            'penguji3' => $req->penguji3,
            'status' => 'terjadwal',
            'tempat' => $req->tempat,
            'jadwalp' => $req->tanggal.' '.$req->jam
        ];
        $Data = DB::table('seminar')->where('id',$req->id)->update($data);
        $new = DB::table('seminar')->where('id',$req->id)->first();
        $mhs = DB::table('pengajuan_judul')->where('stambuk',$new->stambuk)->first();
        Mail::send('Proposal', ['judul' =>$new->judul,'nama' =>$new->nama,'stambuk' =>$new->stambuk,'seminar' => 'Proposal'],function ($message) use ($mhs)
        {
            $message->subject("SEMINAR PROPSAL");
            $message->from('donotreply@kiddy.com', 'PRODI TI UMI');
            $message->to($mhs->email);
        });
        return redirect('/admin');
    }

    public function setsemhas(Request $req)
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        //return dd($req->id);
        $data = [
            'ketua' => $req->ketua,
            'penguji1' => $req->penguji1,
            'penguji2' => $req->penguji2,
            'penguji3' => $req->penguji3,
            'status' => 'terjadwal',
            'tempat' => $req->tempat,
            'jadwalh' => $req->tanggal.' '.$req->jam
        ];
        $Data = DB::table('seminar')->where('id',$req->id)->update($data);
        $new = DB::table('seminar')->where('id',$req->id)->first();
        $mhs = DB::table('pengajuan_judul')->where('stambuk',$new->stambuk)->first();
        Mail::send('Proposal', ['judul' =>$new->judul,'nama' =>$new->nama,'stambuk' =>$new->stambuk,'seminar' => 'Hasil'],function ($message) use ($mhs)
        {
            $message->subject("SEMINAR HASIL");
            $message->from('donotreply@kiddy.com', 'PRODI TI UMI');
            $message->to($mhs->email);
        });
        return redirect('/admin');
    }

    public function setsemtup(Request $req)
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        //return dd($req->id);
        $data = [
            'ketua' => $req->ketua,
            'penguji1' => $req->penguji1,
            'penguji2' => $req->penguji2,
            'penguji3' => $req->penguji3,
            'status' => 'terjadwal',
            'tempat' => $req->tempat,
            'jadwalm' => $req->tanggal.' '.$req->jam
        ];
        $Data = DB::table('seminar')->where('id',$req->id)->update($data);
        $new = DB::table('seminar')->where('id',$req->id)->first();
        $mhs = DB::table('pengajuan_judul')->where('stambuk',$new->stambuk)->first();
        Mail::send('Proposal', ['judul' =>$new->judul,'nama' =>$new->nama,'stambuk' =>$new->stambuk,'seminar' => 'Tutup'],function ($message) use ($mhs)
        {
            $message->subject("SEMINAR TUTUP");
            $message->from('donotreply@kiddy.com', 'PRODI TI UMI');
            $message->to($mhs->email);
        });
        return redirect('/admin');
    }
        
    public function ujikanp($value)
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $status =[
            'status' => 'diujikan'
        ];
        DB::table('seminar')->where('id',$value)->update($status);
        return redirect('/jadsemprop_admin');
    }

    public function ujikanh($value)
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $status =[
            'status' => 'diujikan'
        ];
        DB::table('seminar')->where('id',$value)->update($status);

        return redirect('/jadsemhas_admin');
    }

    public function ujikanm($value)
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $status =[
            'status' => 'diujikan'
        ];
        DB::table('seminar')->where('id',$value)->update($status);
        return redirect('/jadsemtup_admin');
    }

    public function terujip()
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $data = DB::table('seminar')->where('tipe','proposal')->where('status','diujikan')->get();
       
        return view('terprop_admin',['data' =>$data]);
    }



    public function print_p()
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $data = DB::table('seminar')->where('tipe','proposal')->where('status','diujikan')->get();
      //return redirect('/terujip')->with('print','ya');
       return view('print_prop',['data' =>$data]);
        //return Excel::download(new SiswaExport,'data.xlsx');
        //$print = PDF::loadView('print_prop',['data' =>$data]);
        //return dd($print->dompdf());//->download('telah_proposal.pdf');
    }

     public function terujih()
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $data = DB::table('seminar')->where('tipe','hasil')->where('status','diujikan')->get();
       
        return view('terhas_admin',['data' =>$data]);
    }

        public function print_h()
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $data = DB::table('seminar')->where('tipe','hasil')->where('status','diujikan')->get();
       
        return view('print_has',['data' =>$data]);
    }

     public function terujim()
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $data = DB::table('seminar')->where('tipe','tutup')->where('status','diujikan')->get();
       
        return view('tertup_admin',['data' =>$data]);
    }

    public function print_m()
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('/login');
        }
        $data = DB::table('seminar')->where('tipe','tutup')->where('status','diujikan')->get();
       
        return view('print_tup',['data' =>$data]);
    }

    public function detail($value)
    {
        # code...
        $data = DB::table('seminar')->where('id',$value)->first();
        return view('detailp',['data' => $data]);
    }
   
    public function jadwalpm()
    {
        $jadwal = DB::table('seminar')->where('status','terjadwal')->where('tipe','proposal')->where('stambuk',Session::get('stambuk'))->where('judul',Session::get('judul'))->first();
        $jad = $jadwal->jadwalp;
        return view('seminar',['data' => $jadwal,'sem' => 'Proposal','jadwal' => $jad]);
    }

    public function jadwalhm()
    {
        $jadwal = DB::table('seminar')->where('status','terjadwal')->where('tipe','hasil')->where('stambuk',Session::get('stambuk'))->where('judul',Session::get('judul'))->first();
        $jad = $jadwal->jadwalh;
        return view('seminar',['data' => $jadwal,'jadwal' => $jad,'sem' => 'Hasil']);
    }

    public function jadwaltm()
    {
        $jadwal = DB::table('seminar')->where('status','terjadwal')->where('tipe','tutup')->where('stambuk',Session::get('stambuk'))->where('judul',Session::get('judul'))->first();
        $jad = $jadwal->jadwalm;
        return view('seminar',['data' => $jadwal,'jadwal' => $jad,'sem' => 'Skripsi']);
    }
    public function sk_proposal($stb)
    {
        $jadwal = DB::table('seminar')->where('status','terjadwal')->where('tipe','proposal')->where('stambuk',$stb)->first();
        $ketua = DB::table('dosen')->where('pangkat','ketua prodi')->first();
        //return dd($jadwal);
        //$jad = $jadwal->jadwalm;
        //return dd($jadwal);

        return view('SK_proposal',['data' => $jadwal,'ketua' => $ketua]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
