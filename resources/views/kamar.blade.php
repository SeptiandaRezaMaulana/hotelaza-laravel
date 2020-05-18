@extends('indexmaster')
@extends('layouts.app')
@section('title','kamar')

@section('konten')
<div class="container mt-3">
    <div class="row">
        <div class="col-lg-12">
            <h2>Room List</h2>
            <table class="table table-striped table-bordered" id="listKamar">
                <thead style="background-color: #67c7c5;color:white">
                    <tr>
                        <th scope="col">Room Name</th>
                        <th scope="col">Type Room</th>
                        <th scope="col">Price</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kamar as $km)
                        <tr>
                            <td><?= $km['nama_kamar'] ?></td>
                            <td><?= $km['jenis_kamar'] ?></td>
                            <td><?= $km['harga'] ?></td>
                            <td>
                                <a href="/kamar/detailKamar/{{ $km['id_kamar'] }}" class="badge badge-info">Detail</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection