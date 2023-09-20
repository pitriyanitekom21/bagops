<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class polsekController extends Controller
{
    public function index()
    {
        return view('polsek');
    }
    function form(){
        $query =DB::table('pengajuans')->get();
        $data=array(
            'datapolsek' => $query,
            'judul' =>'Data Polsek',
            'aksi' =>url('submit'),
        
        );
        return view('polsek',$data);

    }
    function submit (Request $req)
    {
        $this->validate($req,[
            'alamat_polsek' => 'required',
            'bulan' => 'required',
            'dokumen' => 'mimes:doc,docx,pdf,xls,xlsx,ppt,pptx',
        ]);
        $query = DB::table('pengajuans')->where('idpengajuan', $req->id)->first();
    
        if ($req->hasFile('dokumen')) {
            $dokumen = $req->file('dokumen');
            $dokumen->storeAs('/public/storage', $dokumen->hashName());
            $dokumenPath = '/storage/' . $dokumen->hashName();
        } else {
            $dokumenPath = $query->dokumen;
        }
        $qry=DB::table('pengajuans')
        ->insert([
            'alamat_polsek' => $req->alamat_polsek,
            'bulan' => $req->bulan,
            'dokumen'=> $dokumenPath,
        ]);
        if($qry){
            session()->flash('success', 'Data berhasil ditambahkan');
            return redirect('/home');
        }
    }
}
