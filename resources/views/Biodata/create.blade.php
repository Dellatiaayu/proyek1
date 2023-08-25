@extends('template')
@section('content')
    <div class="content">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" align="center"> TAMBAH BIODATA</h6>
            </div>
            <div class="card-body">
                <form class="user" action="{{ route('dataot.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <Label>NIK :</Label>
                        <input type="text" class="form-control" name="nik">
                    </div>

                    <div class="form-group">
                        <Label>Nama :</Label>
                        <input type="text" class="form-control" name="nama">
                    </div>

                    <div class="form-group">
                        <Label>Tanggal Lahir :</Label>
                        <input type="date" class="form-control" name="ttl">
                    </div>

                    <div class="form-group">
                        <Label>Alamat :</Label>
                        <textarea class="form-control" name="alamat"></textarea>
                    </div>

                    <div class="form-group">
                        <Label>Jenis Kelamin :</Label>
                        <select name="jk" class="form-select input" id="jk">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <Label>Nomor Telpon :</Label>
                        <input type="text" class="form-control" name="no_telp">
                    </div>

                    <div class="form-group">
                        <Label>Surat Pengantar dari Polsek/Polres/Satpol PP :</Label>
                        <input type="file" class="form-control" name="dokumen">
                    </div>

                    <div class="form-group">
                        <Label>Foto :</Label>
                        <input type="file" class="form-control" name="gambar">
                    </div>
                    <center><input type="submit" class="btn btn-primary" value="Simpan Biodata" />
                        <a href="{{ route('dataot.index') }}" class="btn btn-primary">Kembali</a>
                    </center>

                </form>
            </div>
        </div>
    </div>
@endsection
