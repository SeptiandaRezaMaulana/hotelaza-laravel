@extends('indexmaster')
@extends('layouts.app')
@section('konten')
<h3>
    <center>
        HOTEL AZA<br>
        <img src="{{URL::asset('img/hotel.jpg')}}" style="margin-top:50px;" width="150px" alt="">
    </center>
</h3>
<h6 style="margin-top: 100px;text-align: center">
    Copyright <?= date("Y") ?>. Created By DARE(DANY, ALFAN, REZA)
</h6>
@endsection
