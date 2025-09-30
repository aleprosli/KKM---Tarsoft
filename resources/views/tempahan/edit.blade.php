@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Borang Tempahan Makmal</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('tempahan.update', $tempahan->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="nama_penuh" class="form-label">Nama Penuh</label>
                          <input type="text" class="form-control" name="nama_penuh" value="{{ $tempahan->nama_penuh }}">
                        </div>
                        <div class="mb-3">
                          <label for="bilik_makmal" class="form-label">Bilik Makmal</label>
                          <input type="text" class="form-control" id="bilik_makmal" name="bilik_makmal" value="{{ $tempahan->bilik_makmal }}">
                        </div>
                        <div class="mb-3">
                            <label for="bilik_makmal" class="form-label">Tarikh</label>
                            <input type="date" class="form-control" name="tarikh" value="{{ $tempahan->tarikh }}">
                          </div>
                          <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" class="form-control" name="image">
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
