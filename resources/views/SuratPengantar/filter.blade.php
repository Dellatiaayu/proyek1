@extends('template')
@section('content')
    <div class="content">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="text-align: center">SURAT PENGANTAR</h5>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <div class="row">
                        <form action="{{ route('print') }}" method="POST" target="_blank">
                            <div class="col-mb-1">
                                @csrf
                                @method('GET')
                                <input hidden type="text" name="tgl_dtg" value="{{ $cari }}">
                                    <button class="btn btn-primary mt-4" type="submit">Print</button>
                            </div>
                        </form>
                    </div>
                    <p></p>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Kedatangan</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Jenis PMKS</th>
                                <th>Asal/Kiriman</th>
                                <th>Alasan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $item->tgl_dtg }}</td>
                                    <td>{{ $item->dataot->nik }}</td>
                                    <td>{{ $item->dataot->nama }}</td>
                                    <td>{{ $item->dataot->ttl }}</td>
                                    <td>{{ $item->dataot->alamat }}</td>
                                    <td>{{ $item->jenis }}</td>
                                    <td>{{ $item->kiriman }}</td>
                                    <td>{{ $item->alasan }}</td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
