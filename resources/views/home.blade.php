@extends('layouts.appuser')

@section('konten')
            <div class="card">
                <div class="card-header" style="background-color: #C0C0C0;color:black">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Auth::user()->name }} are logged in!
                </div>
            </div>
@endsection

