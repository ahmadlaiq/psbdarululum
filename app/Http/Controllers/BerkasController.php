<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class BerkasController extends Controller
{
    public function index()
    {
        $user = Auth::user()->id;
        $berkas = Berkas::where('user_id', '=', $user)->get();
        return view('client-panel.lihat-berkas', compact('berkas'));
    }

    public function create()
    {
        $user = Auth::user()->id;
        $berkas = Berkas::where('user_id', '=', $user)->get();
        return view('client-panel.edit-berkas', compact('berkas'));
    }

    public function store(Request $request, $id)
    {
        // dd($request->file('akta_kelahiran')->store('akta_kelahiran'));
        $rules = [
            'akta_kelahiran'             => 'mimes:png,jpg,jpeg,pdf|max:1024',
            'kartu_keluarga'             => 'mimes:png,jpg,jpeg,pdf|max:1024',
            'ijazah'                     => 'mimes:png,jpg,jpeg,pdf|max:1024',
            'shun'                       => 'mimes:png,jpg,jpeg,pdf|max:1024',
            'nisn'                       => 'mimes:png,jpg,jpeg,pdf|max:1024',
            'ktp'                        => 'mimes:png,jpg,jpeg,pdf|max:1024',
            'bukti_pembayaran'           => 'mimes:png,jpg,jpeg,pdf|max:1024',
        ];

        $messages = [
            'akta_kelahiran.mimes' => 'File akta kelahiran harus .png/.jpg/.jpeg/.pdf',
            'kartu_keluarga.mimes' => 'File kartu keluarga harus .png/.jpg/.jpeg/.pdf',
            'ijazah.mimes' => 'File kartu keluarga harus .png/.jpg/.jpeg/.pdf',
            'shun.mimes' => 'File kartu keluarga harus .png/.jpg/.jpeg/.pdf',
            'nisn.mimes' => 'File kartu keluarga harus .png/.jpg/.jpeg/.pdf',
            'ktp.mimes' => 'File kartu keluarga harus .png/.jpg/.jpeg/.pdf',
            'bukti_pembayaran.mimes' => 'File kartu keluarga harus .png/.jpg/.jpeg/.pdf',
            'akta_kelahiran.max' => 'File akta kelahiran harus dibawah 1MB',
            'kartu_keluarga.max' => 'File kartu keluarga harus dibawah 1MB',
            'ijazah.max' => 'File kartu keluarga harus dibawah 1MB',
            'shun.max' => 'File kartu keluarga harus dibawah 1MB',
            'nisn.max' => 'File kartu keluarga harus dibawah 1MB',
            'ktp.max' => 'File kartu keluarga harus dibawah 1MB',
            'bukti_pembayaran.max' => 'File kartu keluarga harus dibawah 1MB',
        ];

        // $validator = Validator::make($request->all(), $rules, $messages);
        $validator = $request->validate($rules, $messages);

        // dd($validator);
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput($request->all);
        // }

        if ($request->file('akta_kelahiran')) {
            $validator['akta_kelahiran'] = $request->file('akta_kelahiran')->store('akta_kelahiran');
        }
        if ($request->file('kartu_keluarga')) {
            $validator['kartu_keluarga'] = $request->file('kartu_keluarga')->store('kartu_keluarga');
        }
        if ($request->file('ijazah')) {
            $validator['ijazah'] = $request->file('ijazah')->store('ijazah');
        }
        if ($request->file('shun')) {
            $validator['shun'] = $request->file('shun')->store('shun');
        }
        if ($request->file('nisn')) {
            $validator['nisn'] = $request->file('nisn')->store('nisn');
        }
        if ($request->file('ktp')) {
            $validator['ktp'] = $request->file('ktp')->store('ktp');
        }
        if ($request->file('bukti_pembayaran')) {
            $validator['bukti_pembayaran'] = $request->file('bukti_pembayaran')->store('bukti_pembayaran');
        }
        Berkas::findOrFail($id)->update($validator);

        // $kartu_keluarga       = $request->file('kartu_keluarga');
        // $kartu_keluargaName   = time() . "_" . $kartu_keluarga->getClientOriginalName();
        // $kartu_keluargaPath   = "kartu_keluarga";
        // $kartu_keluarga->move($kartu_keluargaPath, $kartu_keluargaName);

        // $ijazah       = $request->file('ijazah');
        // $ijazahName   = time() . "_" . $ijazah->getClientOriginalName();
        // $ijazahPath   = "ijazah";
        // $ijazah->move($ijazahPath, $ijazahName);

        // $shun       = $request->file('shun');
        // $shunName   = time() . "_" . $shun->getClientOriginalName();
        // $shunPath   = "shun";
        // $shun->move($shunPath, $shunName);

        // $nisn       = $request->file('nisn');
        // $nisnName   = time() . "_" . $nisn->getClientOriginalName();
        // $nisnPath   = "nisn";
        // $nisn->move($nisnPath, $nisnName);

        // $ktp       = $request->file('ktp');
        // $ktpName   = time() . "_" . $ktp->getClientOriginalName();
        // $ktpPath   = "ktp";
        // $ktp->move($ktpPath, $ktpName);

        // $bukti_pembayaran       = $request->file('bukti_pembayaran');
        // $bukti_pembayaranName   = time() . "_" . $bukti_pembayaran->getClientOriginalName();
        // $bukti_pembayaranPath   = "bukti_pembayaran";
        // $bukti_pembayaran->move($bukti_pembayaranPath, $bukti_pembayaranName);

        // ddd($request);
        // Berkas::findOrfail($id)->update($request->all());
        // $this->saveBerkas($request->all(), $akta_kelahiranName, $kartu_keluargaName, $ijazahName, $shunName, $nisnName, $ktpName, $bukti_pembayaranName);
        return Redirect::to("user/lihat-berkas")->withSuccess('Berhasil! Data Berkas Berhasil Diinput.');
    }

    // protected function saveBerkas(array $data, $akta_kelahiran = null, $kartu_keluarga = null, $ijazah = null, $shun = null, $nisn = null, $ktp = null, $bukti_pembayaran = null)
    // {
    //     return Berkas::create([
    //         'akta_kelahiran'    => $akta_kelahiran,
    //         'kartu_keluarga'    => $kartu_keluarga,
    //         'ijazah'            => $ijazah,
    //         'shun'              => $shun,
    //         'nisn'              => $nisn,
    //         'ktp'               => $ktp,
    //         'bukti_pembayaran'  => $bukti_pembayaran,
    //         'user_id'     => Auth::user()->id,
    //     ]);
    // }

    // public function update(Request $request, $id)
    // {
    //     $home = Berkas::find($id);
    //     $home->tanggal_pendaftaran = $request->tanggal_pendaftaran;
    //     $home->tempat_pendaftaran = $request->tempat_pendaftaran;
    //     $home->tanggal_daftar_ulang = $request->tanggal_daftar_ulang;
    //     // return dd($home);
    //     $home->save();
    //     return Redirect::to("user/lihat-berkas")->withSuccess('Berhasil! Data Berkas Berhasil Diubah.');
    // }

}
