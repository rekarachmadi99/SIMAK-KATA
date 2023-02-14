@extends('layouts.dataTables')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pegawai</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Data Pegawai</h3>
                        <a href="{{ route('pegawai.create') }}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i></a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>NIP</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Golongan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $data)
                            <tr>
                                <td>{{ $data->nip }}</td>
                                <td>
                                    <img src="{{ url('img/pegawai/'.$data->foto) }}" alt="{{ $data->foto }}" class="img-thumbnail" width="100px">
                                </td>
                                <td>{{ $data->nama }}</td>
                                <td>{{ $data->jabatan }}</td>
                                <td>{{ $data->golongan }}</td>
                                <td>@if ($data->status == 1)
                                    <span class="badge badge-success">Aktif</span>
                                    @else
                                    <span class="badge badge-danger">Keluar</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="{{ route('pegawai.edit', $data->nip) }}" class="mr-2">
                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></button>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
