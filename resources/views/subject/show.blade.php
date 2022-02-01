@extends('layouts.app')

@section('template_title')
    {{ $subject->name ?? 'Show Subject' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Subject</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('subjects.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name S:</strong>
                            {{ $subject->name_s }}
                        </div>
                        <div class="form-group">
                            <strong>Duration S:</strong>
                            {{ $subject->duration_s }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
