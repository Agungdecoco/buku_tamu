@extends('layouts.main')

@section('section')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('create') }}" class="btn btn-md btn-success mb-3">AJUKAN JADWAL</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">NO</th>
                                    <th scope="col">TANGGAL</th>
                                    <th scope="col">KONSULTAN</th>
                                    <th scope="col">TIPE KONSULTASI</th>
                                    <th scope="col">RUANG</th>
                                    <th scope="col">TOPIK</th>
                                    <th scope="col">ANGGOTA 1</th>
                                    <th scope="col">ANGGOTA 2</th>
                                    <th scope="col">ANGGOTA 3</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $num = 1;
                                @endphp
                                @forelse ($queues as $queue)
                                    <tr>
                                        <td>{{ $queue->id }}</td>
                                        <td>{{ $queue->tgl_konsultasi }}</td>
                                        <td>{{ $queue->consultants->nama_konsultan }}</td>
                                        <td>{{ $queue->tipe_konsultasi }}</td>
                                        <td>{{ $queue->ruang }}</td>
                                        <td>{{ $queue->topik }}</td>
                                        <td>{{ $queue->anggota1 }}</td>
                                        <td>{{ $queue->anggota2 }}</td>
                                        <td>{{ $queue->anggota3 }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('queue-del', $queue->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                            {{-- <a href="/home/destroy/{{ $queue->id }}">Hapus</a> --}}
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $queues->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
