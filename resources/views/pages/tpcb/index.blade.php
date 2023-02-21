@extends('layouts.dataTables')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="m-0">Tim Pembina Cluster Binaan</h1>
                    <div class="callout callout-info mt-4">
                        <h5><i class="fas fa-info"></i> Keterangan:</h5>
                        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center bg-primary"><b>Tim 1</b></div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $id = 1
                                    @endphp
                                    @foreach ($data->where('tim','1')->get() as $data)
                                    <tr>
                                        <td>{{ $id++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jabatan }}</td>
                                        <td>
                                            <a href="{{ route('tpcb.view',$data->nip) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a> </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <a href="{{ route('tpcb.edit') }}" class="btn btn-primary mt-3"><i class="fa fa-folder mr-2" aria-hidden="true"></i>Tambah/Edit Data Tim</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center bg-primary"><b>Tim 2</b></div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $id = 1
                                    @endphp
                                    @foreach ($data->where('tim','2')->get() as $data)
                                    <tr>
                                        <td>{{ $id++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jabatan }}</td>
                                        <td>
                                            <a href="{{ route('tpcb.view',$data->nip) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a> </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <a href="{{ route('tpcb.edit') }}" class="btn btn-primary mt-3"><i class="fa fa-folder mr-2" aria-hidden="true"></i>Tambah/Edit Data Tim</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center bg-primary"><b>Tim 3</b></div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $id = 1;
                                    @endphp
                                    @foreach ($data->where('tim','3')->get() as $data)
                                    <tr>
                                        <td>{{ $id++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jabatan }}</td>
                                        <td>
                                            <a href="{{ route('tpcb.view',$data->nip) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a> </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <a href="{{ route('tpcb.edit') }}" class="btn btn-primary mt-3"><i class="fa fa-folder mr-2" aria-hidden="true"></i>Tambah/Edit Data Tim</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center bg-primary"><b>Tim 4</b></div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $id=1;
                                    @endphp
                                    @foreach ($data->where('tim','4')->get() as $data)
                                    <tr>
                                        <td>{{ $id++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jabatan }}</td>
                                        <td>
                                            <a href="{{ route('tpcb.view',$data->nip) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a> </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <a href="{{ route('tpcb.edit') }}" class="btn btn-primary mt-3"><i class="fa fa-folder mr-2" aria-hidden="true"></i>Tambah/Edit Data Tim</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header text-center bg-primary"><b>Tim 5</b></div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $id = 1;
                                    @endphp
                                    @foreach ($data->where('tim','5')->get() as $data)
                                    <tr>
                                        <td>{{ $id++ }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jabatan }}</td>
                                        <td>
                                            <a href="{{ route('tpcb.view',$data->nip) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a> </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <a href="{{ route('tpcb.edit') }}" class="btn btn-primary mt-3"><i class="fa fa-folder mr-2" aria-hidden="true"></i>Tambah/Edit Data Tim</a>
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
