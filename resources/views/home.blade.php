@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div id='app'>
            <create-component></create-component>
            <adminmovies-component class="cp2"></adminmovies-component>
            </div>
        </div>
    </div>
</div>
@endsection
