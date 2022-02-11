@extends('layouts.app')

@section('template_title')
    {{ $docmate->name ?? 'Show Docmate' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Docmate</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('docmates.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Teacher Id:</strong>
                            {{ $docmate->teacher_id }}
                        </div>
                        <div class="form-group">
                            <strong>Subject Id:</strong>
                            {{ $docmate->subject_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
