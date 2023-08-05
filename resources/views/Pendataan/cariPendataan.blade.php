@extends('template')
@section('content')
    <div class="content">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" align="center">PENDATAAN PMKS</h6>
            </div>
            <div class="card-body">
                <form class="user" action="{{ route('pendataan.create') }}" method="GET">
                    @csrf
                    @method('GET')
                    <label>Masukan NIK :</label>
                    <div class="form-group d-flex ">
                        <input type="text" class="form-control me-3" name="nik">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
