@extends('layouts.new')

</html>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
            </div id='app'>
            <contact-component> </contact-component>
            </div>
        </div>
    </div>
</div>
@endsection
