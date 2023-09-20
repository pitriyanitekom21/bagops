<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bagopsController extends Controller
{
    public function index()
    {
        
        return view('bagops');
    }
    public function dataBagops()
    {
        $query =DB::table('pengajuans')->where('bulan', 'januari')
        ->get();
        $data=array (
            'databagops' => $query,
            'judul' => 'tampil jadwal piket'
        );
        return view('bagops',$data);
    }
    function delete($id)
    {
        $query =DB::table('pengajuans')->where('idpengajuan', $id)->delete();
        if($query)
        {
            echo "<script>alert('DATA BERHASIL DIHAPUS!');window.location='/dataBagops';</script>";
        }
    }
    public function dataFeb()
    {
        $query =DB::table('pengajuans')->where('bulan', 'februari')
        ->get();
        $data=array (
            'datafebruari' => $query,
            'judul' => 'tampil jadwal piket'
        );
        return view('februari',$data);
    }
    function deleteFeb($id)
    {
        $query =DB::table('pengajuans')->where('idpengajuan', $id)->delete();
        if($query)
        {
            echo "<script>alert('DATA BERHASIL DIHAPUS!');window.location='/dataFeb';</script>";
        }
    }
    public function dataMar()
    {
        $query =DB::table('pengajuans')->where('bulan', 'maret')
        ->get();
        $data=array (
            'datamaret' => $query,
            'judul' => 'tampil jadwal piket'
        );
        return view('maret',$data);
    }
    function deleteMar($id)
    {
        $query =DB::table('pengajuans')->where('idpengajuan', $id)->delete();
        if($query)
        {
            echo "<script>alert('DATA BERHASIL DIHAPUS!');window.location='/dataMar';</script>";
        }
    }
    public function dataAp()
    {
        $query =DB::table('pengajuans')->where('bulan', 'april')
        ->get();
        $data=array (
            'dataapril' => $query,
            'judul' => 'tampil data Polsek'
        );
        return view('april',$data);
    }
    function deleteAp($id)
    {
        $query =DB::table('pengajuans')->where('idpengajuan', $id)->delete();
        if($query)
        {
            echo "<script>alert('DATA BERHASIL DIHAPUS!');window.location='/dataAp';</script>";
        }
    }
    public function dataMei()
    {
        $query =DB::table('pengajuans')->where('bulan', 'mei')
        ->get();
        $data=array (
            'datamei' => $query,
            'judul' => 'tampil data Polsek'
        );
        return view('mei',$data);
    }
    function deleteMei($id)
    {
        $query =DB::table('pengajuans')->where('idpengajuan', $id)->delete();
        if($query)
        {
            echo "<script>alert('DATA BERHASIL DIHAPUS!');window.location='/dataMei';</script>";
        }
    }
    public function dataJun()
    {
        $query =DB::table('pengajuans')->where('bulan', 'juni')
        ->get();
        $data=array (
            'datajuni' => $query,
            'judul' => 'tampil data Polsek'
        );
        return view('juni',$data);
    }
    function deleteJun($id)
    {
        $query =DB::table('pengajuans')->where('idpengajuan', $id)->delete();
        if($query)
        {
            echo "<script>alert('DATA BERHASIL DIHAPUS!');window.location='/dataJun';</script>";
        }
    }
    public function dataJul()
    {
        $query =DB::table('pengajuans')->where('bulan', 'juli')
        ->get();
        $data=array (
            'datajuli' => $query,
            'judul' => 'tampil data Polsek'
        );
        return view('juli',$data);
    }
    function deleteJul($id)
    {
        $query =DB::table('pengajuans')->where('idpengajuan', $id)->delete();
        if($query)
        {
            echo "<script>alert('DATA BERHASIL DIHAPUS!');window.location='/dataJul';</script>";
        }
    }
    public function dataAg()
    {
        $query =DB::table('pengajuans')->where('bulan', 'agustus')
        ->get();
        $data=array (
            'dataagustus' => $query,
            'judul' => 'tampil data Polsek'
        );
        return view('agustus',$data);
    }
    function deleteAg($id)
    {
        $query =DB::table('pengajuans')->where('idpengajuan', $id)->delete();
        if($query)
        {
            echo "<script>alert('DATA BERHASIL DIHAPUS!');window.location='/dataAg';</script>";
        }
    }
    public function dataSe()
    {
        $query =DB::table('pengajuans')->where('bulan', 'september')
        ->get();
        $data=array (
            'dataseptember' => $query,
            'judul' => 'tampil data Polsek'
        );
        return view('september',$data);
    }
    function deleteSe($id)
    {
        $query =DB::table('pengajuans')->where('idpengajuan', $id)->delete();
        if($query)
        {
            echo "<script>alert('DATA BERHASIL DIHAPUS!');window.location='/dataSe';</script>";
        }
    }
    public function dataOk()
    {
        $query =DB::table('pengajuans')->where('bulan', 'oktober')
        ->get();
        $data=array (
            'dataoktober' => $query,
            'judul' => 'tampil data Polsek'
        );
        return view('oktober',$data);
    }
    function deleteOk($id)
    {
        $query =DB::table('pengajuans')->where('idpengajuan', $id)->delete();
        if($query)
        {
            echo "<script>alert('DATA BERHASIL DIHAPUS!');window.location='/dataOk';</script>";
        }
    }
    public function dataNo()
    {
        $query =DB::table('pengajuans')->where('bulan', 'november')
        ->get();
        $data=array (
            'datanovember' => $query,
            'judul' => 'tampil data Polsek'
        );
        return view('november',$data);
    }
    function deleteNo($id)
    {
        $query =DB::table('pengajuans')->where('idpengajuan', $id)->delete();
        if($query)
        {
            echo "<script>alert('DATA BERHASIL DIHAPUS!');window.location='/dataNo';</script>";
        }
    }
    public function dataDe()
    {
        $query =DB::table('pengajuans')->where('bulan', 'desember')
        ->get();
        $data=array (
            'datadesember' => $query,
            'judul' => 'tampil data Polsek'
        );
        return view('desember',$data);
    }
    function deleteDes($id)
    {
        $query =DB::table('pengajuans')->where('idpengajuan', $id)->delete();
        if($query)
        {
            echo "<script>alert('DATA BERHASIL DIHAPUS!');window.location='/dataDes';</script>";
        }
    }
}
