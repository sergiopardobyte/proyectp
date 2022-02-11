@extends('layouts.app')

@section('template_title')
    {{ $estmatri->name ?? 'Show Estmatri' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estmatri</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estmatris.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Student Id:</strong>
                            {{ $estmatri->student_id }}
                        </div>
                        <div class="form-group">
                            <strong>Matricula Id:</strong>
                            {{ $estmatri->matricula_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
