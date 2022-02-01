@extends('layouts.app')

@section('template_title')
    {{ $module->name ?? 'Show Module' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Module</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('modules.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name M:</strong>
                            {{ $module->name_m }}
                        </div>
                        <div class="form-group">
                            <strong>Beginning M:</strong>
                            {{ $module->beginning_m }}
                        </div>
                        <div class="form-group">
                            <strong>End M:</strong>
                            {{ $module->end_m }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
