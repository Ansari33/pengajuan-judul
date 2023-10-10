<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
class Jadwal_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('jadwal_mengajar')->get();
        return view('utama',['data' => $data]);
    }
    public function tambah()
    {
        //
    //    $data = DB::table('jadwal_mengajar')->get();
        return view('tambahjadwal');
    }
    public function tambah_jadwal(Request $req)
    {
        $data = [

            'nama_dosen' => $req->nama_dosen,
            'mata_kuliah' => $req->mata_kuliah,
            'jam_masuk' => $req->jam_masuk,
            'hari' => $req->hari,
            'semester' => $req->semester,
            'tahun' => $req->tahun,
            'status' => 'tidak'
        ];
        DB::table('jadwal_mengajar')->insert($data);
        return redirect('/utama');
    }
    public function Filter($hari,$semester,$tahun)
    {
        # code...
        $data = DB::table('jadwal_mengajar')->where('hari',$hari)->andwhere('semester',$semester)->andwhere('tahun',$semester)->get();
        return view('hasilfilter');
    }
    public function dofilter(Request $Req)
    {
        # code...
        Session::flush();
        if (!Session::get('filter')) {
         Session::put('filter',true);
         Session::put('hari',$Req->hari);
         Session::put('semester',$Req->semester);
         Session::put('tahun',$Req->tahun);
        $data = DB::table('jadwal_mengajar')->where('hari',$Req->hari)->where('semester',$Req->semester)->where('tahun',$Req->tahun)->get();
        }

        elseif (Session::get('filter')) {
            $data = DB::table('jadwal_mengajar')->where('hari',Session::get('hari'))->where('semester',Session::get('semester'))->where('tahun',Session::get('tahun'))->get();
        }
         //return dd(Session::get('filter'));
       return view('hasilfilter',['data'=>$data]);
    }

    public function afterfilter()
    {
        # code...
        $data = DB::table('jadwal_mengajar')->where('hari',Session::get('hari'))->where('semester',Session::get('semester'))->where('tahun',Session::get('tahun'))->get();
        return view('hasilfilter',['data'=>$data]);
    }

    public function ubah($value)
    {
        # code...
        $dt =[
            'status' => 'hadir'
        ];
        $data = DB::table('jadwal_mengajar')->where('id',$value)->update($dt);
        return redirect('/afterfilter');
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
