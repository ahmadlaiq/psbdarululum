<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Formulir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\Rule;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idUser = Auth::user()->id;
        $dataFormulir = Formulir::where('user_id', '=', $idUser)->get();
        $dataBiodata = Biodata::where('user_id', '=', $idUser)->get();
        $provinsi = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi')->json();
        $prov = collect($provinsi['provinsi']);
        return view('client-panel.edit-formulir', compact('dataFormulir', 'dataBiodata', 'prov'));
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
        $validate = $request->validate([
            'pendidikan_nonformal'      => '',
            'nama_lembaga'              => '',
            // 'alamat_lembaga'            => '',
            // 'tahun_lulus'               => '',
            // 'tanggal_masuk_pesantren'   => '',
            // 'pendidikan_tambahan'       => '',
            // 'pendidikan_formal'         => '',
            // 'kelas_pendidikan_formal'   => '',
            // 'diniyyah'                  => '',
            // 'kelas_diniyyah'            => '',
            // 'nama_kepala_keluarga'      => '',
            // 'status_kepala_keluarga'    => '',
            // 'nama_ayah'                 => '',
            // 'status_ayah'               => '',
            // 'nik_ayah'                  => 'digits:16',
            // 'tanggal_lahir_ayah'        => '',
            // 'pendidikan_ayah'           => '',
            // 'pekerjaan_ayah'            => '',
            // 'penghasilan_ayah'          => '',
            // 'nomor_hp_ayah'             => 'digits_between:11,13',
            // 'nama_ibu'                  => '',
            // 'status_ibu'                => '',
            // 'nik_ibu'                   => '|digits:16',
            // 'tanggal_lahir_ibu'         => '',
            // 'pendidikan_ibu'            => '',
            // 'pekerjaan_ibu'             => '',
            // 'penghasilan_ibu'           => '',
            // 'nomor_hp_ibu'              => 'digits_between:11,13',
        ]);

        $validate['user_id'] = Auth::user()->id;

        // dd($validate);
        Biodata::create($validate);

        return redirect('/user/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show(Biodata $biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(Biodata $biodata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($id);
        // $idF = Formulir::find($id);
        $validatedFormulir = $request->validate([
            'nik'                       => 'digits:16', Rule::unique('formulirs', 'nik')->ignore($id, $id),
            'nama'                      => 'max:50',
            'nomor_kk'                  => 'digits:16',
            // 'nomor_hp'                  => '|digits_between:11,13',
            'nisn'                      => '', 'digits:10', Rule::unique('formulirs', 'nisn')->ignore($id, $id),
            'jenis_kelamin'             => '',
            'tempat_lahir'              => '',
            // 'tanggal_lahir'             => '',
            'anak_ke'                   => '',
            'tinggal_bersama'           => '',
            'pendidikan_terakhir'       => '',
            'provinsi'                  => '',
            'kabupaten'                 => '',
            'kecamatan'                 => '',
            'alamat'                    => '',
            'kode_pos'                  => 'digits:5',
        ]);

        // dd($id);
        $validatedBiodata = $request->validate([
            'pendidikan_nonformal'      => '',
            'nama_lembaga'              => '',

        ]);
        Biodata::where('id', $id)
            ->update($validatedBiodata);

        Formulir::where('id', $id)
            ->update($validatedFormulir);

        return redirect('/user/lihat-formulir');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Biodata $biodata)
    {
        //
    }
}
