@extends('layouts.app')

@section('template_title')
    Docmate
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Docmate') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('docmates.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        
                                        
										<th>Teacher Id</th>
										<th>Subject Id</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($docmates as $docmate)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $docmate->teacher_id }}</td>
											<td>{{ $docmate->subject_id }}</td>

                                            <td>
                                                <form action="{{ route('docmates.destroy',$docmate->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('docmates.show',$docmate->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('docmates.edit',$docmate->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $docmates->links() !!}
            </div>
        </div>
    </div>
@endsection
