@extends('indexmaster')
@extends('layouts.app')

@section('konten')
<h3>Add Tenant</h3><hr>
<form action="/penyewa/savePenyewa" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">Tenant Name</label>
        <input type="text" name="nama_penyewa" required class="form-control" placeholder="Septianda Reza">
      </div>
    <div class="form-group">
        <label for="no">No. Hp</label>
        <input type="number" class="form-control" name="no_hp" placeholder="0822xxxxxxxx">
      </div>
    <div class="form-group">
        <label for="gender">Gender</label>
        <input type="text" class="form-control" name="jenis_kelamin" placeholder="L/P">
      </div>
    <input type="submit" value="Added Data" class="btn btn-primary">
    <a href="/penyewa" class="btn btn-danger">Back</a>
</form>
@endsection