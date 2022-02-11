@extends('layouts.app')

@section('template_title')
    {{ $estdoc->name ?? 'Show Estdoc' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Estdoc</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estdocs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Student Id:</strong>
                            {{ $estdoc->student_id }}
                        </div>
                        <div class="form-group">
                            <strong>Teacher Id:</strong>
                            {{ $estdoc->teacher_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
