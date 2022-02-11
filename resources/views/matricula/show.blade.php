@extends('layouts.app')

@section('template_title')
    {{ $matricula->name ?? 'Show Matricula' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Matricula</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('matriculas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fecha Matricula:</strong>
                            {{ $matricula->fecha_matricula }}
                        </div>
                        <div class="form-group">
                            <strong>Pagos Id:</strong>
                            {{ $matricula->pagos_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
