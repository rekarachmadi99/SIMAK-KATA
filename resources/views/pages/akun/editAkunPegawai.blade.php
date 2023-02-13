@extends('layouts.form')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mt-3">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h4>Edit Data Pegawai</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('akun.pegawai.update') }}" method="post">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="">NIP</label>
                            <input type="text" name="nip" class="form-control" value="{{ $data->nip }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $data->email }}">
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-0">
                                    <label for="">Password</label>
                                    <input type="text" name="password" class="form-control">
                                </div>
                                <p>*Password kosongkan jika tidak ingin di update!</p>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Konfirmasi Password</label>
                                    <input type="text" name="konfirmasi_password" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nip">Status Akun</label>
                            <Select class="form-control" name="is_aktif" id="is_aktif">
                                <option @if ($data->is_aktif == 1) {{ 'selected' }} @endif value="1">Aktif</option>
                                <option @if ($data->is_aktif == 0) {{ 'selected' }} @endif value="0">Tidak Aktif</option>
                            </Select>
                        </div>
                        <div class="form-group">
                            <label for="nip">Role Akun</label>
                            <Select class="form-control" name="role" id="role">
                                <option @if ($data->role == 1) {{ 'selected' }} @endif value="1">Administrator</option>
                                <option @if ($data->role == 2) {{ 'selected' }} @endif value="2">pimpinan</option>
                                <option @if ($data->role == 3) {{ 'selected' }} @endif value="3">Pegawai</option>
                            </Select>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('akun.pegawai.index') }}" class="btn btn-danger col-2 mr-2">Kembali</a>
                            <input type="submit" class="btn btn-primary col-2" value="Simpan">
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
