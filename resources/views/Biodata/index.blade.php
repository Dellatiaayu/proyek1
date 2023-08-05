@extends('template')
@section('content')
    <div class="content">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="text-align: center">Biodata Orang Terlantar</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-8">
                            <a class="btn btn-success" href="{{ route('dataot.create') }}">Tambah Data</a>
                        </div>
                        <div class="col-md-4">
                            <form action="{{ route('dataot.index') }}" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="cari" placeholder="Cari" value="{{ $request->cari }}">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p></p>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Nomor Telpon</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($biodatas as $biodata)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $biodata->nik }}</td>
                                    <td>{{ $biodata->nama }}</td>
                                    <td>{{ $biodata->ttl }}</td>
                                    <td>{{ $biodata->alamat }}</td>
                                    <td>{{ $biodata->jk }}</td>
                                    <td>{{ $biodata->no_telp }}</td>
                                    <td><img src="{{ url('/data_file/' . $biodata->gambar) }}" width="150px" height="150px">
                                    </td>
                                    <td>

                                        <form action="{{ route('dataot.destroy', $biodata->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <a class="btn btn-warning" href="{{ route('dataot.edit', $biodata->id) }}">
                                                <i class="bi bi-pencil-square"></i></a>

                                            <button type="submit" class="btn btn-danger"
                                                onclick="Javascript:return confirm('Apakah anda ingin menghapus data ini?')">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
