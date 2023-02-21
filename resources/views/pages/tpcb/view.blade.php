@extends('layouts.form')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mt-3">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-primary card-outline">
                        <div class="card-header d-flex justify-content-center">
                            <h3 class="card-title">Foto</h3>
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <img src="{{ url('img/pegawai/'.$data->foto) }}" class="rounded" alt="" width="300px" height="auto">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-primary card-outline">
                        <div class="card-header d-flex justify-content-center">
                            <h3 class="card-title">Biodata</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input type="text" class="form-control" value="{{ $data->nip }}" readonly>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="nip">Nama</label>
                                        <input type="text" class="form-control" value="{{ $data->nama }}" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="nip">Golongan</label>
                                        <input type="text" class="form-control" value="{{ $data->golongan }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nip">Jabatan</label>
                                <input type="text" class="form-control" value="{{ $data->jabatan }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nip">Email</label>
                                <input type="text" class="form-control" value="{{ $data->email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nip">No Telepon</label>
                                <input type="text" class="form-control" value="{{ $data->no_telepon }}" readonly>
                            </div>
                            <div class="mt-2">
                                <a href="{{ route('tpcb.index') }}" class="btn btn-danger">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
