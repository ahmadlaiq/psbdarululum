@extends('client-panel.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-dark">Upload Berkas</h1>
            @if(session('errors'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Terjadi kesalahan:
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
        </div>

        <form action="{{ route('upload-berkas') }}" class="MultiFile-intercepted" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header text-dark">
                    <strong>Silahkan Upload Berkas Anda.</strong>
                </div>
                <div class="card-body">
                    <div class="form-group row mt-2">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-dark">Akta Kelahiran</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control form-control-sm" id="colFormLabelSm" name="akta_kelahiran" >
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-dark">Kartu Keluarga (KK)</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control form-control-sm" id="colFormLabelSm" name="kartu_keluarga" >
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-dark">Ijazah Terakhir</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control form-control-sm" id="colFormLabelSm" name="ijazah" >
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-dark">SHUN Terakhir</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control form-control-sm" id="colFormLabelSm" name="shun" >
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-dark">NISN Terakhir</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control form-control-sm" id="colFormLabelSm" name="nisn" >
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-dark">KTP Orang Tua/Wali</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control form-control-sm" id="colFormLabelSm" name="ktp" >
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-dark">Bukti Pembayaran</label>
                        <div class="col-sm-4">
                            <input type="file" class="form-control form-control-sm" id="colFormLabelSm" name="bukti_pembayaran">
                            <input type="file" class="form-control form-control-sm" id="colFormLabelSm" name="user_id" hidden>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg mt-5">Submit</button>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
@endsection