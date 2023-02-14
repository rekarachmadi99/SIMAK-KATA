@extends('layouts.form')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper mt-3">

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Tambah Pegawai</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('pegawai.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">NIP</label>
                            <input type="text" class="form-control" name="nip" id="nip">
                        </div>

                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>

                        <div class="form-group">
                            <label for="nip">Jabatan</label>
                            <Select class="form-control" name="jabatan" id="jabatan">
                                <option value="Administrator">Administrator</option>
                                <option value="Pendamping">Pendamping</option>
                                <option value="TPCB">TPCB</option>
                                <option value="Puskesmas">Puskesmas</option>
                            </Select>
                        </div>

                        <div class="form-group">
                            <label for="nip">Golongan</label>
                            <input type="text" class="form-control" name="golongan" id="golongan">
                        </div>
                        <div class="form-group">
                            <label for="nip">Status Pegawai</label>
                            <Select class="form-control" name="status" id="status">
                                <option value="0">Keluar</option>
                                <option selected value="1">Aktif Bekerja</option>
                            </Select>
                        </div>
                        <div class="form-group">
                            <label for="nip">Foto Pegawai</label>
                            <input type="file" class="form-control" name="foto" id="foto">
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
