@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Selamat Datang
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header">Senarai Tempahan Makmal</div>

                <div class="card-body">
                    <a href="{{ route('tempahan.create') }}" type="button" class="btn btn-primary">+ Tempah Makmal</a>

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Penuh</th>
                            <th scope="col">Bilik Makmal</th>
                            <th scope="col">Tarikh</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Tindakan</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($tempahans as $booking)
                          <tr>
                            <th scope="row">{{ $booking->id }}</th>
                            <td>{{ $booking->nama_penuh }}</td>
                            <td>{{ $booking->bilik_makmal }}</td>
                            <td>{{ $booking->tarikh }}</td>
                            @if ($booking->image)
                            <td><img src="{{ $booking->image }}" alt="Gambar" style="width: 100px; height: 100px;"></td>
                            @else
                                <td>-</td>
                            @endif
                            <td>
                                <a href="{{ route('tempahan.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
                                <a href="{{ route('tempahan.delete', $booking->id) }}" class="btn btn-danger" onclick="return confirm('Adakah anda yakin untuk menghapus tempahan ini?')">Hapus</a>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
