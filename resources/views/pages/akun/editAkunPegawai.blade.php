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
                    <form action="" method="post">

                        <div class="form-group">
                            <label for="">NIP</label>
                            <input type="text" class="form-control" readonly>
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control">
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Konfirmasi Password</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Status Akun</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Role Akun</label>
                            <input type="text" class="form-control">
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
