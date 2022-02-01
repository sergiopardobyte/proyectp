@extends('layouts.app')

@section('template_title')
    {{ $teacher->name ?? 'Show Teacher' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Teacher</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('teacher.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Document:</strong>
                            {{ $teacher->document }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $teacher->name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $teacher->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Mail:</strong>
                            {{ $teacher->mail }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $teacher->phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
