@extends('indexmaster')
@section('title')
@extends('layouts.app')
@section('konten')

<!-- isi bagian konten halaman -->
@section('konten')
<div class="container">
    <div class="row mt-6">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detailed Room Information
                </div>
                <div class="card-body">
                    @foreach($kamar as $kmr)
                    <p class="card-text">
                        <label for=""><b>Room Name :</b></label>
                        {{$kmr['nama_kamar']}}
                    </p>
                    <p class="card-text">
                        <label for=""><b>Type Room :</b></label>
                        {{$kmr['jenis_kamar']}}
                    </p>
                    <p class="card-text">
                        <label for=""><b>Price :</b></label>
                        {{$kmr['harga']}}
                    </p>
                    @endforeach
                    <a href="/kamar" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
