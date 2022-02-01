@extends('layouts.app')

@section('template_title')
    {{ $career->name ?? 'Show Career' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Career</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('career.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name C:</strong>
                            {{ $career->name_c }}
                        </div>
                        <div class="form-group">
                            <strong>Duration C:</strong>
                            {{ $career->duration_c }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
