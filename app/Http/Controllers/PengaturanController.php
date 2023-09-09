<?php

namespace App\Http\Controllers;

use App\Exports\FormulirExport;
use App\Models\Formulir;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Facades\Excel;

class PengaturanController extends Controller
{
    public function index()
    {
        $home = Home::all()->first();
        return view('client.home', compact('home'));
    }

    public function indexPengaturan()
    {
        // $user = User::all()->where('id', 2)->first();
        $home = Home::all()->first();
        return view('admin-panel.pengaturan', compact('home'));
    }
    
    public function update(Request $request, $id)
    {
        $home = Home::find($id);
        $home->tanggal_pendaftaran = $request->tanggal_pendaftaran;
        $home->tempat_pendaftaran = $request->tempat_pendaftaran;
        $home->tanggal_daftar_ulang = $request->tanggal_daftar_ulang;
        $home->link_wa = $request->link_wa;
        $home->nama_rekening = $request->nama_rekening;
        $home->no_rekening = $request->no_rekening;
        $home->save();
        return Redirect::to("/admin/dashboard")->withSuccess('Berhasil! Pengaturan Pendaftaran Berhasil Diubah.');
    }

    public function dashboard(){

        $all = Formulir::all()->count();
        $proses = Formulir::all()->where('status_pendaftaran','LIKE', 'proses')->count();
        $valid = Formulir::all()->where('status_pendaftaran','LIKE', 'lulus')->count();
        $tidakvalid = Formulir::all()->where('status_pendaftaran','LIKE', 'tidak lulus')->count();

        $smp = Formulir::all()->where('lembaga','LIKE', 'SMP Walisongo Pacet')->count();
        $smk = Formulir::all()->where('lembaga','LIKE', 'SMKS Walisongo Pacet')->count();
        $kuliah = Formulir::all()->where('lembaga','LIKE', 'Universitas')->count();

        $mondok = Formulir::all()->where('mondok','LIKE', 'Ya')->count();
        $tidakMondok = Formulir::all()->where('mondok','LIKE', 'Tidak')->count();
        return view('admin-panel.dashboard', compact('all', 'proses', 'valid', 'tidakvalid', 'smp', 'smk', 'kuliah', 'mondok', 'tidakMondok'));
    }

    public function verifikasi(){
        $formmulir = Formulir::all()->where('status_pendaftaran','LIKE', 'proses')->sortByDesc("created_at");
        return view('admin-panel.verifikasi', compact('formmulir'));
    }

    public function valid(){
        $formmulir = Formulir::all()->where('status_pendaftaran','LIKE', 'lulus')->sortByDesc("created_at");
        return view('admin-panel.pendaftaran-valid', compact('formmulir'));
    }

    public function tidakvalid(){
        $formmulir = Formulir::all()->where('status_pendaftaran','LIKE', 'tidak lulus')->sortByDesc("created_at");
        return view('admin-panel.pendaftaran-tidak-valid', compact('formmulir'));
    }

    public function updateTerima(Request $request, $id)
    {
    $formulir = Formulir::find($id);
    $formulir->status_pendaftaran = $request->status_pendaftaran;
    //return dd($problems);
    $formulir->save();
    return Redirect::to("/admin/pendaftaran-valid")->withSuccess('Pendaftaran Berhasil Disetujui!');
    }

    public function updateTolak(Request $request, $id)
    {
    $formulir = Formulir::find($id);
    $formulir->status_pendaftaran = $request->status_pendaftaran;
    // return dd($formulir);
    $formulir->save();
    return Redirect::to("/admin/pendaftaran-tidak-valid")->withSuccess('Pendaftaran Berhasil Ditolak!');
    }

    public function exportdata()
	{
		$formulir = Formulir::all();
        // return dd($formulir);
		return view('admin-panel.export-data', compact('formulir'));
	}

    public function formulirexport()
	{
		return Excel::download(new FormulirExport, 'formulir.xlsx');
	}

    public function indexDeleteAll(){
        return view('admin-panel.delete-formulir');
    }

    public function deleteAll()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('formulirs')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        return redirect()->back();
    }

    public function delete($id)
    {
        DB::table('formulirs')->where('id', $id)->delete();
        return redirect()->back();
    }

}
