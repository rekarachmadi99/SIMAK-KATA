@extends('layouts.form')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mt-3">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Pegawai</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('pegawai.update',$edit->nip) }}" method="post" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="">NIP</label>
                            <input type="text" class="form-control" name="nip" id="nip" value="{{ $edit->nip }}" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" value="{{ $edit->nama }}">
                        </div>

                        <div class="form-group">
                            <label for="nip">Jabatan</label>
                            <Select class="form-control" name="jabatan" id="jabatan">
                                <option @if ($edit->jabatan == 'Administrator') {{ 'selected' }} @endif value="Administrator">Administrator</option>
                                <option @if ($edit->jabatan == 'Pendamping') {{ 'selected' }} @endif value="Pendamping">Pendamping</option>
                                <option @if ($edit->jabatan == 'TPCB') {{ 'selected' }} @endif value="TPCB">TPCB</option>
                                <option @if ($edit->jabatan == 'Puskesmas') {{ 'selected' }} @endif value="Puskesmas">Puskesmas</option>
                            </Select>
                        </div>

                        <div class="form-group">
                            <label for="nip">Golongan</label>
                            <input type="text" class="form-control" name="golongan" id="golongan" value="{{ $edit->golongan }}">
                        </div>
                        <div class="form-group">
                            <label for="nip">No Telepon</label>
                            <input type="text" class="form-control" name="no_telepon" value="{{ $edit->no_telepon }}">
                        </div>
                        <div class="form-group">
                            <label for="nip">Status Pegawai</label>
                            <Select class="form-control" name="status" id="status">
                                <option @if ($edit->status == 0) {{ 'selected' }} @endif value="0">Tidak Aktif Bekerja</option>
                                <option @if ($edit->status == 1) {{ 'selected' }} @endif value="1">Aktif Bekerja</option>
                            </Select>
                        </div>
                        <div class="form-group">
                            <label for="nip">Foto Pegawai</label>
                            <input type="file" class="form-control" name="foto" id="foto">
                            <p class="badge badge-info">*Jika foto pegawai tidak akan diganti, kosongkan!</p>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="{{ route('pegawai.index') }}" class="btn btn-danger col-2 mr-2">Kembali</a>
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
