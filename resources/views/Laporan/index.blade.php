@extends('template')
@section('content')
    <div class="content">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" style="text-align: center">Laporan Pendataan PMKS</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col">
                            <form action="{{ route('laporan.index') }}" method="POST" class="mb-3 row">
                                @csrf
                                @method('GET')
                                <div class="col-md-5">
                                    <label for="month">Filter by Month:</label>
                                    <select class="form-select" name="bulan" id="bulan">
                                        <option value="">Pilih Bulan</option>
                                        <option value="01">Januari</option>
                                        <option value="02">Februari</option>
                                        <option value="03">Maret</option>
                                        <option value="04">April</option>
                                        <option value="05">Mei</option>
                                        <option value="06">Juni</option>
                                        <option value="07">Juli</option>
                                        <option value="08">Agustus</option>
                                        <option value="09">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <label for="status">Filter by Status:</label>
                                    <select name="status" id="status" class="form-select">
                                        <option value="">All Status</option>
                                        <option value="Belum Ditangani">Belum Ditangani</option>
                                        <option value="Sudah Ditangani">Sudah Ditangani</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-primary mt-4">Filter</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-2">
                            <form target="_blank" action="{{ route('printlaporan') }}" method="get">
                                @csrf
                                @method('get')
                                <input hidden type="text" name="status" id="displayStatus" value="{{ $status }}">
                                <input hidden type="text" name="bulan" id="displayStatus" value="{{ $bulan }}">
                                <div class="col-md-1">
                                    <button type="submit" class="btn btn-primary mt-4">Print</button>
                                </div>
                            </form>
                        </div>
                    </div>

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
                                <th>Alasan</th>
                                <th>Status</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($laporans as $laporan)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $laporan->dataot->nik }}</td>
                                    <td>{{ $laporan->dataot->nama }}</td>
                                    <td>{{ $laporan->dataot->ttl }}</td>
                                    <td>{{ $laporan->dataot->alamat }}</td>
                                    <td>{{ $laporan->jenis }}</td>
                                    <td>{{ $laporan->tgl_dtg }}</td>
                                    <td>{{ $laporan->alasan }}</td>
                                    <td>{{ $laporan->status }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
