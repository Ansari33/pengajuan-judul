<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Yajra\DataTables\Datatables;
use Mail;
use Storage;
use Response;
class ProposalController extends Controller
{

    public function adddosen(Request $value)
    {
        $data = [
            'nip' => $value->nip,
            'nama' => $value->nama,
            'pangkat' => $value->pangkat,
            'golongan' => $value->golongan,
            'ruangan' => $value->ruangan,
            'peminatan' => $value->peminatan,
            
        ];
        DB::table('dosen')->insert($data);
        return redirect('/dosen');
    }

     public function updosen(Request $value)
    {
        $data = [
            'nip' => $value->nip,
            'nama' => $value->nama,
            'pangkat' => $value->pangkat,
            'golongan' => $value->golongan,
            'ruangan' => $value->ruangan,
            'peminatan' => $value->peminatan,
        ];
        DB::table('dosen')->where('id',$value->id)->update($data);
        return redirect('/dosen');
    }

    public function vdosen($value)
    {
        // $data = [
        //     'nip' => $value->nip,
        //     'nama' => $value->nama,
        //     'peminatan' => $value->peminatan,
        // ];
        $data = DB::table('dosen')->where('id',$value)->first();
        return view('editdosen',['data' => $data]);
    }

    public function ddosen($value)
    {
     
        $data = DB::table('dosen')->where('id',$value)->delete();
        return redirect('/dosen');
    }

    

    public function cari(Request  $e)
    {
        $d = DB::table('pengajuan_judul')->first();
        return Datatables::of($d);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proposal = DB::table('pengajuan_judul')->OrderBy('tanggal_pengajuan','DESC')->get();
        $seminar = DB::table('seminar')->where('status','terjadwal')->get();
        return view('utama',['proposal' => $proposal,'seminar'=> $seminar]);
    }

    public function admin()
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('login');
        }
        $data ['ajuan_judul'] = DB::table('pengajuan_judul')->where('status','mengajukan')->count();
        $data ['judul_lolos'] = DB::table('pengajuan_judul')->where('status','lolos')->count();
        $data ['judul_tolak'] = DB::table('pengajuan_judul')->where('status','ditolak')->count();
        $data ['ajuan_proposal'] = DB::table('seminar')->where('status','mengajukan')->where('tipe','proposal')->count();
        $data ['proposal_jadwal'] = DB::table('seminar')->where('status','terjadwal')->where('tipe','proposal')->count();
        $data ['ajuan_hasil'] = DB::table('seminar')->where('status','mengajukan')->where('tipe','hasil')->count();
        $data ['hasil_jadwal'] = DB::table('seminar')->where('status','terjadwal')->where('tipe','hasil')->count();
        $data ['proposal_diuji'] = DB::table('seminar')->where('status','diujikan')->where('tipe','proposal')->count();
        $data ['hasil_diuji'] = DB::table('seminar')->where('status','diujikan')->where('tipe','hasil')->count();
        $data ['ajuan_meja'] = DB::table('seminar')->where('status','mengajukan')->where('tipe','tutup')->count();
        $data ['meja_jadwal'] = DB::table('seminar')->where('status','terjadwal')->where('tipe','tutup')->count();
        $data ['meja_diuji'] = DB::table('seminar')->where('status','diujikan')->where('tipe','tutup')->count();
     //  return dd($data);
        return view('admin_utama',['data' => $data]);
    }

    public function ajuanjudul_admin()
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('login');
        }
        $proposal = DB::table('pengajuan_judul')->where('status','mengajukan')->OrderBy('tanggal_pengajuan','DESC')->get();
        return view('ajuanjudul_admin',['proposal' => $proposal]);
    }

     public function ajukanprop()
    {
        $data = DB::table('dosen')->get();
        return view('ajukan_proposal',['data' => $data]);
    }

    public function simpanjudul(Request $req)
    {
        //return Storage::get($req);
       $cek = DB::table('pengajuan_judul')->where('stambuk',$req->stambuk)->where('status','!=','ditolak')->get();
       $data =  $cek->count();
       if ($data > 0) {
           return redirect('/ajukanprop')->with('oke','Anda Telah Mengajukan Judul!');
       }else{
        $req->lampiran->move(public_path('tampilan/lampiran'),$req->stambuk.'.pdf');
       $data =[
        'stambuk' => $req->stambuk,
        'nama' => $req->nama,
        'peminatan' => $req->peminatan,
        'hp' => $req->hp,
        'email' => $req->email,
        'judul1' => $req->judul1,
        'judul2' => $req->judul2,
        'judul3' => $req->judul3,
        'pembimbing1' => $req->pembimbing1,
        'pembimbing2' => $req->pembimbing2,
        'kode' => $req->kode,
        'status' => 'mengajukan'

       ];
       $input = DB::table('pengajuan_judul')->insert($data);
     if ($input) {
         return redirect('/ajukanprop')->with('oke','Pengajuan Berhasil Diinput!');
     }
 }
    }

    public function masuk(Request $req)
    {
        $data  = DB::table('admin')->where('user',$req->user)->where('password',$req->password)->count();

        if($data>0){
            Session::put('masuk',true);
            Session::put('Admin',$req->user);
            return redirect('/admin');
        }
        else{
            return redirect('/login');
        }
    }

    public function cek($id)
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('login');
        }
        $data = DB::table('pengajuan_judul')->where('id',$id)->first();
        $data2 = DB::table('dosen')->get();
        return view('cekjudul',['data' => $data,'data2' =>$data2]);
    }

    public function tolak($id)
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('login');
        }
        $tolak = [
            'status' => 'ditolak'
        ];
        $data = DB::table('pengajuan_judul')->where('id',$id)->update($tolak);
        return redirect('/admin');
    }

    public function diterima()
    {
        // if (!Session::get('masuk')) {
        //     # code...
        //     return redirect('login');
        // }
        $data = DB::table('pengajuan_judul')->where('status','lolos')->get();
        return view('diterima',['data' => $data]);
    }

    public function ditolak()
    {
        // if (!Session::get('masuk')) {
        //     # code...
        //     return redirect('login');
        // }
        $data = DB::table('pengajuan_judul')->where('status','ditolak')->get();
        return view('ditolak_admin',['data' => $data]);
    }

     public function diterima_admin()
    {
        if (!Session::get('masuk')) {
            # code...
            return redirect('login');
        }
        $data = DB::table('pengajuan_judul')->where('status','lolos')->get();
        return view('diterima_admin',['data' => $data]);
    }

    public function terimajudul(Request $req)
    {
        //return 'lol';
     //   $handle = public_path().'/tampilan/lampiran/12345678.pdf';
      //  return Response::download($handle);
       // return Storage::get($req->stambuk.'.pdf');
        if (!Session::get('masuk')) {
            # code...
            return redirect('login');
        }
        $data =[
            'pembimbing1' =>$req->pembimbing1,
            'pembimbing2' =>$req->pembimbing2,
            'status' => 'lolos',
            'diterima' => $req->judul
        ];

        DB::table('pengajuan_judul')->where('id',$req->id)->update($data);
         $dosen1 = DB::table('dosen')->where('nama',$req->pembimbing1)->first();
         $dosen2 = DB::table('dosen')->where('nama',$req->pembimbing2)->first();
        DB::table('bimbingan')->insert([
            'judul' => $req->id,
            'dosen' => $dosen1->id,
            'dosen2' => $dosen2->id,
            'nomor_skp1' => $req->skpb1,
            'nomor_skp2' => $req->skpb2,
            'tanggal_sk' => date("d m Y")
        ]);
         $judul = DB::table('pengajuan_judul')->where('id',$req->id)->first();

        // $isi = [
        //     'judul'  => $judul 
        // ];

        Mail::send('kosong', ['judul' =>$judul->diterima,'nama' =>$judul->nama,'stambuk' =>$judul->stambuk],function ($message) use ($judul)
        {
            $message->subject("JUDUL DITERIMA");
            $message->from('donotreply@kiddy.com', 'PRODI TI');
            $message->to($judul->email);
        });

        return redirect('/ajuanjudul_admin');
    }

    public function logout()
    {
        Session::flush();
        return redirect('/utama');
    }

    public function cari1(Request $bla){
        $lol = DB::table('pengajuan_judul')->where('stb',$bla->stb)->first();
      return view('m_admin',['halo' => $lol->diterima]);
      
    }

    public function m_login(Request $x)
    {
        $data = DB::table('pengajuan_judul')->where('status','lolos')->where('stambuk',$x->stambuk)->where('kode',$x->kode)->get();
       //return $data;

        $datac = $data->count();
         
        if($datac >0){

            Session::put('loginm',true);
            Session::put('stambuk',$x->stambuk);
            Session::put('judul',$data[0]->diterima);

            //return $statusp;
            return redirect('/goprofilm');
            //,['data' => $data,'statusp' => $statusp,'statush' => $statush,'statusm' => $statusm]);
        }else{
        return view('login_mahasiswa');    
        }
        
    }

    public function goprofilm()
    {
        if (!Session::get('loginm')) {
            return view('login_mahasiswa');
        }
        $data = DB::table('pengajuan_judul')->where('status','lolos')->where('stambuk',Session::get('stambuk'))->where('diterima',Session::get('judul'))->get();

         $statusp='';
         $statush='Selesaikan Propsal';
         $statusm='Selesaikan Hasil';

        $data2 = DB::table('seminar')->where('stambuk',Session::get('stambuk'))->where('judul',Session::get('judul'))->where('tipe','proposal')->get();
            $datac = $data2->count();
            if ($datac  == 0) {
            $statusp = 'Belum Mengajukan Propsal';
            }elseif($datac >0 and $data2[0]->status == 'mengajukan'){
                $statusp ='Sedang Mengajukan';
            }elseif($datac >0 and $data2[0]->status == 'terjadwal'){
                $statusp ='Sudah Dijadwalkan';
            }elseif($datac >0 and $data2[0]->status == 'diujikan'){
                $statusp ='Telah Diujikan';
                $data3 = DB::table('seminar')->where('tipe','hasil')->where('stambuk',Session::get('stambuk'))->where('judul',Session::get('judul'))->get();
                $datac = $data3->count();
                        if ($datac  == 0) {
                $statush = 'Belum Mengajukan Hasil';
                }elseif($datac >0 and $data3[0]->status == 'mengajukan'){
                    $statush ='Sedang Mengajukan';
                }elseif($datac >0 and $data3[0]->status == 'terjadwal'){
                    $statush ='Sudah Dijadwalkan';
                }elseif($datac >0 and $data3[0]->status == 'diujikan'){
                    $statush ='Telah Diujikan';
                    $data4 = DB::table('seminar')->where('tipe','tutup')->where('stambuk',Session::get('stambuk'))->where('judul',Session::get('judul'))->get();
                    $datac = $data4->count(); 
                             if ($datac  == 0) {
                    $statusm = 'Belum Mengajukan Ujian Tutup';
                    }elseif($datac >0 and $data4[0]->status == 'mengajukan'){
                        $statusm ='Sedang Mengajukan';
                    }elseif($datac >0 and $data4[0]->status == 'terjadwal'){
                        $statusm ='Sudah Dijadwalkan';
                    }elseif($datac >0 and $data4[0]->status == 'diujikan'){
                        $statusm ='Telah Diujikan';
                        // $data3 = DB::table('seminar')->where('tipe','tutup')->where('stambuk',$x->stambuk)->where('judul',$data[0]->diterima)->get();
                        // $datac = $data3->count();
                    }
                }
            }
            return view('profilm',['data' => $data,'statusp' => $statusp,'statush' => $statush,'statusm' => $statusm]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lampiran($stb)
    {
         $handle = public_path().'/tampilan/lampiran/'.$stb.'.pdf';
          return Response::download($handle);
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
