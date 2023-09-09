@extends('admin-panel.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-dark">Pengaturan</h1>

        </div>

        <form action="{{ route('pengaturan-admin', $home->id) }}" class="MultiFile-intercepted" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card">
                
                <div class="card-header text-dark">
                    <strong>Silahkan Ubah Informasi PBS</strong>
                </div>
                <div class="card-body">
                    <div class="form-group row mt-2">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-dark">Tanggal
                            Pembukaan Pendaftaran</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm"
                                value="{{ $home->tanggal_pendaftaran }}" name="tanggal_pendaftaran" required>
                        </div>
                    </div>
                    <div class="form-group row mt-4">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-dark">Tempat
                            Pembukaan Pendaftaran</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm"
                                value="{{ $home->tempat_pendaftaran }}" name="tempat_pendaftaran" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-dark">Tanggal
                            Daftar Ulang</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm"
                                value="{{ $home->tanggal_daftar_ulang }}" name="tanggal_daftar_ulang" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-dark">Link Whatsapp</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm"
                                value="{{ $home->link_wa }}" name="link_wa" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-dark">Nama Rekening</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm"
                                value="{{ $home->nama_rekening }}" name="nama_rekening" required>
                        </div>
                    </div>
                    <div class="form-group row mt-2">
                        <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm text-dark">No Rekening</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-sm"
                                value="{{ $home->no_rekening }}" name="no_rekening" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-lg mt-5">Submit</button>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
@endsection
