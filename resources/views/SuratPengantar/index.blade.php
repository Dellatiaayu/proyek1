@extends('template')
@section('content')
    <div class="content">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary" align="center">SURAT PENGANTAR</h5>
            </div>
            <div class="card-body">
                <form class="user" action="{{ route('filtersurat') }}" method="POST">
                    @csrf
                    @method('GET')
                    <label>Cari Surat Pengantar Berdasarkan Tanggal :</label>
                    <div class="form-group d-flex ">
                        <input type="date" class="form-control me-3" name="tgl_dtg">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
