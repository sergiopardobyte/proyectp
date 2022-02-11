@extends('layouts.app')

@section('content')
<title>Instituto Tecnológico Quito</title>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido al Sistema!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
