@extends('template')
@section('content')
    <div class="content">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="text-align: center">Pendataan Orang Terlantar</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-4">
                            <a class="btn btn-primary btn" href="{{ url('/carinik') }}">Cari NIK</a>
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
                                <th>Jenis PMKS</th>
                                <th>Tanggal Kedatangan</th>
                                <th>Asal/Kiriman</th>
                                <th>Alasan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($pendataans as $pendataan)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $pendataan->dataot->nik }}</td>
                                    <td>{{ $pendataan->dataot->nama }}</td>
                                    <td>{{ $pendataan->dataot->ttl }}</td>
                                    <td>{{ $pendataan->dataot->alamat }}</td>
                                    <td>{{ $pendataan->jenis }}</td>
                                    <td>{{ $pendataan->tgl_dtg }}</td>
                                    <td>{{ $pendataan->kiriman }}</td>
                                    <td>{{ $pendataan->alasan }}</td>
                                    <td>{{ $pendataan->status }}</td>
                                    </td>
                                    <td>

                                        <form action="{{ route('pendataan.destroy', $pendataan->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <a class="btn btn-warning" href="{{ route('pendataan.edit', $pendataan->id) }}">
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
