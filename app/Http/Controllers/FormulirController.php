<?php

namespace App\Http\Controllers;

use App\Models\Berkas;
use App\Models\Formulir;
use App\Models\Home;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;
// use PDF;
use Barryvdh\DomPDF\Facade\Pdf;

class FormulirController extends Controller
{
    public function index()
    {
        $idUser = Auth::user()->id;
        $dataUser = Formulir::where('user_id', '=', $idUser)->get();
        return view('client-panel.lihat-formulir', compact('dataUser'));
    }

    public function create()
    {
        //Routing ke halaman pendaftaran
        return view('client.register');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nik'                       => 'required|digits:16|unique:formulirs',
            'nama'                      => 'required|max:50',
            'nomor_kk'                  => 'required|digits:16',
            'nomor_hp'                  => 'required|digits_between:11,13',
            'nisn'                      => 'required|digits:10|unique:formulirs',
            'jenis_kelamin'             => 'required',
            'tempat_lahir'              => 'required|string',
            'tanggal_lahir'             => 'required',
            'anak_ke'                   => 'required',
            'tinggal_bersama'           => 'required',
            'provinsi'                  => 'required',
            'kabupaten'                 => 'required',
            'kecamatan'                 => 'required',
            'alamat'                    => 'required',
            'kode_pos'                  => 'required|digits:5',
        ]);

        $validate_account = $request->validate([
            'email' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
        ]);

        $user = User::create([
            'email' => $validate_account['email'],
            'password' => Hash::make($validate_account['password']),
        ]);

        $validate['user_id'] = $user->id;
        $user->assignRole('user');

        $formulir = Formulir::create($validate);
        // dd($formulir->id);
        Berkas::create([
            'user_id' => $user->id,
            'formulir_id' => $formulir->id
        ]);
        Auth::loginUsingId($user->id);

        return redirect()->route('join.wa');
    }

    public function show(Formulir $formulir)
    {
        //Menampilkan satu data untuk dilihat
    }

    public function edit(Formulir $formulir)
    {
        $idUser = Auth::user()->id;
        $dataUser = Formulir::where('user_id', '=', $idUser)->get();
        $provinsi = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi')->json();
        $prov = collect($provinsi['provinsi']);
        return view('client-panel.edit-formulir', compact('dataUser', 'prov'));
    }

    public function update(Request $request, $id)
    {
        // dd($id);
        $validData = $request->validate([
            'nik'                        => 'digits:16', Rule::unique('formulirs', 'nik')->ignore($id, $id),
            'nama'                       => 'max:50',
            'nomor_kk'                   => 'digits:16',
            'nomor_hp'                   => '', 'digits_between:11,13',
            'nisn'                       => 'digits:10', Rule::unique('formulirs', 'nisn')->ignore($id, $id),
            'jenis_kelamin'              => '',
            'tempat_lahir'               => '',
            'tanggal_lahir'              => '',
            'anak_ke'                    => '',
            'tinggal_bersama'            => '',
            'pendidikan_terakhir'        => '',
            'provinsi'                   => '',
            'kabupaten'                  => '',
            'kecamatan'                  => '',
            'alamat'                     => '',
            'kode_pos'                   => '', 'digits:5',
            'mondok'                     => '',
            'jenis_pendaftaran'          => '',
            'lembaga'                    => '',
            'jurusan'                    => '',
            'ukuran_seragam'             => '',
            'nomor_un'                   => '',
            'pendidikan_nonformal'       => '',
            'nama_lembaga'               => '',
            'alamat_lembaga'             => '',
            'tahun_lulus'                => '',
            'tanggal_masuk_pesantren'    => '',
            'pendidikan_tambahan'        => '',
            'pendidikan_formal'          => '',
            'kelas_pendidikan_formal'    => '',
            'diniyyah'                   => '',
            'kelas_diniyyah'             => '',
            'nama_kepala_keluarga'       => '',
            'status_kepala_keluarga'     => '',
            'nama_ayah'                  => '',
            'status_ayah'                => '',
            'nik_ayah'                   => '', 'digits:16',
            'tanggal_lahir_ayah'         => '',
            'pendidikan_ayah'            => '',
            'pekerjaan_ayah'             => '',
            'penghasilan_ayah'           => '',
            'nomor_hp_ayah'              => '', 'digits_between:11,13',
            'nama_ibu'                   => '',
            'status_ibu'                 => '',
            'nik_ibu'                    => '', 'digits:16',
            'tanggal_lahir_ibu'          => '',
            'pendidikan_ibu'             => '',
            'pekerjaan_ibu'              => '',
            'penghasilan_ibu'            => '',
            'nomor_hp_ibu'               => '', 'digits_between:11,13',
            'wali_yang_bertanggungjawab' => '',
            'nama_wali'                  => '',
            'nomor_hp_wali'              => ''
        ]);

        Formulir::findOrfail($id)->update($validData);

        return redirect('/user/lihat-formulir');
    }

    public function destroy(Formulir $formulir)
    {
        //Menghapus satu data yang dipilih
    }

    public function provinsi()
    {
        $provinsi = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi')->json();
        $prov = collect($provinsi['provinsi']);
        // dd($prov);
        return view('client.register', compact('prov'));
    }

    public function dashboard()
    {
        $idUser = Auth::user()->id;
        $dashboard = Formulir::where('user_id', '=', $idUser)->get();
        $home = Home::all()->first();
        return view('client-panel.dashboard', compact('dashboard', 'home'));
    }

    public function cetak()
    {
        $idUser = Auth::user()->id;
        $formulir = Formulir::where('user_id', $idUser)->get();
        $pdf   = PDF::loadView('pdfTest', ['formulir' => $formulir]);
        return $pdf->download('Bukti_Pendaftaran.pdf');
    }

    public function joinWa()
    {
        $home = Home::all()->first();
        return view('client.join-wa', compact('home'));
    }
}
