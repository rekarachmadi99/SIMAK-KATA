@extends('layouts.dataTables')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Akun Pegawai</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8 col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3 class="card-title">Data Akun Pegawai</h3>
                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahAkun"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>

                        {{-- Modal - Tambah Akun --}}
                        <div class="modal fade" id="tambahAkun" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('akun.pegawai.store') }}" method="post">
                                        @csrf
                                        <div class="modal-header bg-primary">
                                            <h5 class="modal-title" id="exampleModalLabel">Tambah Akun Pegawai</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="nip">NIP</label>
                                                <input type="text" name="nip" id="nip" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="nip">Email</label>
                                                <input type="email" name="email" id="email" class="form-control">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="nip">Password</label>
                                                        <input type="password" name="password" id="password" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label for="nip">Konfirmasi Password</label>
                                                        <input type="password" name="konfirmasiPassword" id="konfirmasiPassword" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="nip">Status Akun</label>
                                                <Select class="form-control" name="is_aktif" id="is_aktif" readonly>
                                                    <option value="1">Aktif</option>
                                                </Select>
                                            </div>
                                            <div class="form-group">
                                                <label for="nip">Role Akun</label>
                                                <Select class="form-control" name="role" id="role">
                                                    <option value="1">Administrator</option>
                                                    <option value="2">pimpinan</option>
                                                    <option value="3">Pegawai</option>
                                                </Select>
                                            </div>
                                            <input type="submit" class="btn btn-primary" value="Tambah Akun Pegawai">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Email</th>
                                        <th>Role Akun</th>
                                        <th>Status Akun</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $id = 1;
                                    @endphp
                                    @foreach ($akun as $akun)
                                    <tr>
                                        <td>{{ $id++ }}</td>
                                        <td>{{ $akun->nip }}</td>
                                        <td>{{ $akun->email }}</td>
                                        <td>@if($akun->role == 1)
                                            {{ 'Administrator' }}
                                            @elseif ($akun->role == 2)
                                            {{ 'Kepala' }}
                                            @else
                                            {{ 'Anggota' }}
                                            @endif
                                        </td>
                                        <td>@if($akun->is_aktif)
                                            <span class="badge badge-success">Aktif</span>
                                            @else
                                            <span class="badge badge-danger">Tidak Aktif</span>
                                            @endif
                                        </td>
                                        <td class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('akun.pegawai.edit', $akun->id) }}" class="mr-2">
                                                <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                            </a>
                                            @if($akun->role != 1)
                                            <form action="{{ route('akun.pegawai.destroy',$akun->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" onclick="return confirm('Anda yakin ingin menghapus akun?');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                            </form>
                                            @endif
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Fitur</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('nonaktif.account.update') }}" class="mb-2" method="post">
                                @method('patch')
                                @csrf
                                <input type="text" name="is_aktif" id="is_aktif" value="1" hidden>
                                <input type="submit" class="btn btn-primary btn-block" onclick="return confirm('Aktifkan akun pegawai?');" value="Aktifkan Semua Akun">
                            </form>

                            <form action="{{ route('nonaktif.account.update') }}" class="mb-2" method="POST">
                                @method('patch')
                                @csrf
                                <input type="text" name="is_aktif" id="is_aktif" value="0" hidden>
                                <input type="submit" class="btn btn-danger btn-block" onclick="return confirm('Nonaktifkan akun pegawai?');" value="Nonaktifkan Semua Akun">
                            </form>

                            <form action="{{ route('reset.password.default.update') }}" method="post">
                                @method('patch')
                                @csrf
                                <input type="submit" class="btn btn-danger btn-block" onclick="return confirm('Apakah kamu yakin?');" value="Reset Password Default">
                            </form>

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
