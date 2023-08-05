@extends('template')
@section('content')
    <div class="content">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" align="center">PENDATAAN PMKS</h6>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <Label>NIK :</Label>
                    <input readonly type="text" class="form-control" name="jenis" value="{{ $data->nik }}">
                </div>
                <div class="form-group">
                    <Label>Nama :</Label>
                    <input readonly type="text" class="form-control" name="jenis" value="{{ $data->nama }}">
                </div>
                <div class="form-group">
                    <Label>Tanggal Lahir :</Label>
                    <input readonly type="text" class="form-control" name="jenis" value="{{ $data->ttl }}">
                </div>
                <div class="form-group">
                    <Label>Alamat :</Label>
                    <input readonly type="text" class="form-control" name="jenis" value="{{ $data->alamat }}">
                </div>

                <form class="user" action="{{ route('pendataan.store') }}" method="POST">
                    @csrf
                    <input readonly type="text" hidden class="form-control" name="data_ots" value="{{ $data->id }}">

                    <div class="form-group">
                        <Label>Jenis PMKS :</Label>
                        <input type="text" class="form-control" name="jenis">
                    </div>

                    <div class="form-group">
                        <Label>Tanggal Kedatangan :</Label>
                        <input type="date" class="form-control" name="tgl_dtg">
                    </div>

                    <div class="form-group">
                        <Label>Asal/Kiriman :</Label>
                        <input type="text" class="form-control" name="kiriman">
                    </div>

                    <div class="form-group">
                        <Label>Alasan :</Label>
                        <input type="text" class="form-control" name="alasan">
                    </div>

                    <div class="form-group">
                        <Label>Status :</Label>
                        <select name="status" class="form-select input" id="status">
                            <option>Belum Ditangani</option>
                            <option>Sudah Ditangani</option>
                        </select>
                    </div>
                    <center><input type="submit" class="btn btn-primary" value="Simpan Data" />
                        <a href="{{ route('pendataan.index') }}" class="btn btn-primary">Kembali</a>
                    </center>

                </form>
            </div>
        </div>
    </div>
@endsection
