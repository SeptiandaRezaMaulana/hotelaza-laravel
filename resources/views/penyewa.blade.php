@extends('indexmaster')
@extends('layouts.app')
@section('title','penyewa')

@section('konten')
<a href="/penyewa/tambahPenyewa" class="btn btn-primary">Add Tenant</a>
<br/>
<br/>
<table class="table table-bordered">
    <thead class="thead-dark">
        <th>Tenant Name</th>
        <th>No Handphone</th>
        <th>Gender</th>
    </thead>
    <tbody>
        @foreach($penyewa as $pyw)
        <tr>
            <td>{{ $pyw['nama_penyewa'] }}</td>
            <td>{{ $pyw['no_hp'] }}</td>
            <td>{{ $pyw['jenis_kelamin'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
