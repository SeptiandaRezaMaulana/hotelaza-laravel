@extends('indexmaster')
@section('title')
@extends('layouts.app')

@section('konten')
<h3>Add Transaction</h3><hr>
<form action="/transaksi/saveTransaksi" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="nama">Tenant Name</label>
            <select class="form-control" name="id_penyewa" id="id_penyewa">
                <option selected="selected">Choose Tenant</option>
                @foreach($penyewa as $pyw)
                    <option value="{{ $pyw['id_penyewa'] }}">{{ $pyw['nama_penyewa'] }} - {{ $pyw['no_hp'] }}</option>
                @endforeach
            </select>

    </div>
    <div class="form-group">
        <label for="nama">Room Name</label>
            <select class="form-control" name="id_kamar" id="id_kamar">
                <option selected="selected">Choose Room</option>
                @foreach($kamar as $kmr) 
                    <option value="{{ $kmr['id_kamar'] }}">{{ $kmr['nama_kamar'] }} - {{ $kmr['jenis_kamar'] }}</option>
                @endforeach
            </select>
    </div>
    <input type="submit" value="Add Transaction" class="btn btn-primary">
    <a href="/transaksi" class="btn btn-danger">Back</a>
</form>
@endsection