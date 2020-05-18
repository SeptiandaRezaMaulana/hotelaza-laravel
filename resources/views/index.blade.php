@extends('indexmaster')
@extends('layouts.app')
@section('konten')

<h3>
    <center>
        HOTEL AZA<br>
        <img src="{{URL::asset('img/hotel.jpg')}}" style="margin-top: 100px" width="550px"><br>
    </center>
</h3>
<h6 style="margin-top: 100px;text-align: center">
    Copyright <?= date("M Y") ?>. Created By DARE(Dany, Alfan, Reza)
</h6>
@endsection

