@extends('client-panel.layouts.master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-dark">Status Pembayaran</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Unduh Bukti Pembayaran</a>
        </div>

        <form>
            <div class="card">
                <div class="card-header text-dark">
                    <strong>Berikut Merupakan Status Pembayaran Anda</strong>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">No. Pendaftaran</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nama Ayah</th>
                            <th scope="col">Rencana Pendidikan</th>
                            <th scope="col">Tanggal Pendaftaran</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">FU-0872</th>
                            <td>Aditya Rizki</td>
                            <td>SUparlan</td>
                            <td>Mondok - SMP Fathul Ulum</td>
                            <td>29-01-2022</td>
                            <td><button class="btn btn-warning" type="button">Proses Konfirmasi</button></td>
                          </tr>
                        </tbody>
                      </table>
                    
                </div>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
@endsection