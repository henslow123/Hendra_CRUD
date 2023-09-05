@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header justify-content-between">
                        <h3>Form Kategori</h3>
                        <a href="{{ route('kategori.index')}}" class="btn btn-secondary">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kategori.update', $kategori->id)}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control" value="{{$kategori->nama}}" required>
                        </div>
                        <div class="from-group">
                            <label for="">Deskripsi</label>
                            <input type="text" name="dkr" class="form-control" required value="{{$kategori->dkr}}">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
