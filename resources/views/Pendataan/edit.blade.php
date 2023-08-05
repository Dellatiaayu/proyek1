
@extends('template')
@section('content')
<div class="row">
    <div class="col-lg-12 mb-4">
            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" align="center">UPDATE PENDATAAN PMKS</h6>
                </div>
                <div class="card-body">
                    <form class="user" action="{{ route('pendataan.update', $pendataan->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" hidden value="{{ $pendataan->dataots_id }}" name='dataots_id'>
                        <div class="form-group">
                            <Label>Jenis PMKS :</Label>
                            <input type="text" class="form-control" name="jenis" value="{{ $pendataan->jenis }}">
                        </div>

                        <div class="form-group">
                            <Label>Tanggal Kedatangan :</Label>
                            <input type="date" class="form-control" name="tgl_dtg" value="{{ $pendataan->tgl_dtg }}">
                        </div>

                        <div class="form-group">
                            <Label>Asal/Kiriman :</Label>
                            <input type="text" class="form-control" name="kiriman" value="{{ $pendataan->kiriman }}">
                        </div>

                        <div class="form-group">
                            <Label>Alasan :</Label>
                            <input type="text" class="form-control" name="alasan" value="{{ $pendataan->alasan }}">
                        </div>

                        <div class="form-group">
                            <Label>Status :</Label>
                            {{-- <input type="text" class="form-control" name="status" value="{{ $pendataan->status }}"> --}}
                            <select name="status" id="status" class="form-select input" value="{{ $pendataan->status }}" >
                            <option>Belum Ditangani</option>
                            <option>Sudah Ditangani</option>
                        </select>
                        </div>
                        <center>
                            <input type="submit" class="btn btn-primary" value="Update Data" />
                            <a href="{{ route('pendataan.index') }}" class="btn btn-primary">Kembali</a>
                        </center>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection
