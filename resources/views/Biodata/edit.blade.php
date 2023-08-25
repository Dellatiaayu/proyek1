@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" align="center">UPDATE BIODATA</h6>
                </div>
                <div class="card-body">
                    <form class="user" action="{{ route('dataot.update', $dataot->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <Label>NIK :</Label>
                            <input type="text" class="form-control" name="nik" value="{{ $dataot->nik }}">
                        </div>

                        <div class="form-group">
                            <Label>Nama :</Label>
                            <input type="text" class="form-control" name="nama" value="{{ $dataot->nama }}">
                        </div>

                        <div class="form-group">
                            <Label>Tanggal Lahir :</Label>
                            <input type="date" class="form-control" name="ttl" value="{{ $dataot->ttl }}">
                        </div>

                        <div class="form-group">
                            <Label>Alamat :</Label>
                            <textarea class="form-control" name="alamat"> {{ $dataot->alamat }} </textarea>
                        </div>

                        <div class="form-group">
                            <Label>Jenis Kelamin :</Label>
                            <select name="jk" id="jk" class="form-select input" value="{{ $dataot->jk }}">
                                <option>Laki-Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <Label>Nomor Telpon :</Label>
                            <input type="text" class="form-control" name="no_telp" value="{{ $dataot->no_telp }}">
                        </div>

                        <div class="form-group">
                            <Label>Surat Pengantar dari Polsek/Polres/Satpol PP :</Label>
                            <a href="{{ url('dokumen/' . $dataot->dokumen) }}" alt="dokumen" style="width: 200px;">
                            <input type="file" class="form-control" name="dokumen">
                        </div>

                        <div class="form-group">
                            <Label>Foto :</Label>
                            <img src="{{ url('data_file/' . $dataot->gambar) }}" alt="Foto"
                                style="width: 200px;">
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <center>
                            <input type="submit" class="btn btn-primary" value="Update Biodata" />
                            <a href="{{ route('dataot.index') }}" class="btn btn-primary">Kembali</a>
                        </center>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
