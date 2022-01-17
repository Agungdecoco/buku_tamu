@extends('layouts.main')

@section('section')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Ajukan Jadwal</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('home') }}"> Kembali</a>
            </div>
        </div>
    </div>

    <div class=""
        style="position: absolute; width: 338px; height: 32px; left: 488px; top: 296px; background: #FFFFFF;">

        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="tanggal" class="form-label"><b>Tanggal Konsultasi</b></label>
                <input type="datetime-local" class="form-control" id="tanggal" name="tgl_konsultasi">
            </div>
            <div class="form-group">
                <label for="konsultan" class="form-label"><b>Konsultan</b></label>
                <select class="form-select form-select-sm" label=".form-select-sm example" id="konsultan"
                    name="consultants_nip">
                    <option selected>Open this select menu</option>
                    @forelse ( $consultants as $consultant )
                        <option value="{{ $consultant->nip }}">{{ $consultant->nama_konsultan }}</option>
                    @empty
                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="ruang" class="form-label"><b>Ruang</b></label>
                <select class="form-select form-select-sm" label=".form-select-sm" id="ruang" name="ruang">
                    <option selected>Open this select menu</option>
                    <option value="ruang 1">ruang 1</option>
                    <option value="ruang 2">ruang 2</option>
                </select>
            </div>
            <div class="form-group">
                <label for="topik" class="form-label"><b>Topik</b></label>
                <input type="textarea" class="form-control" id="topik" name="topik">
            </div>
            <div class="form-group">
                <label for="tipe" class="form-label"><b>Tipe Konsultasi</b></label>
                <select class="form-select form-select-sm" label=".form-select-sm example" name="tipe_konsultasi">
                    <option selected>Open this select menu</option>
                    <option value="online">online</option>
                    <option value="offline">offline</option>
                </select>
            </div>
            <div class="form-group">
                <label for="anggota1" class="form-label"><b>Anggota 1</b></label>
                <input type="text" class="form-control" id="anggota1" name="anggota1">
            </div>
            <div class="form-group">
                <label for="anggota2" class="form-label"><b>Anggota 2</b></label>
                <input type="text" class="form-control" id="anggota2" name="anggota2">
            </div>
            <div class="form-group">
                <label for="anggota3" class="form-label"><b>Anggota 3</b></label>
                <input type="text" class="form-control" id="anggota3" name="anggota3">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>


@endsection
