@extends('layouts.app')

@section('template_title')
    {{ $student->name ?? 'Show Student' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Student</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Document:</strong>
                            {{ $student->document }}
                        </div>
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $student->name }}
                        </div>
                        <div class="form-group">
                            <strong>Last Name:</strong>
                            {{ $student->last_name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $student->email }}
                        </div>
                        <div class="form-group">
                            <strong>Phone:</strong>
                            {{ $student->phone }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
