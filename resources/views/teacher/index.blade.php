@extends('layouts.app')

@section('template_title')
    Teacher
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Teacher') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('teacher.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>
                                        
										<th>Document</th>
										<th>Name</th>
										<th>Last Name</th>
										<th>Mail</th>
										<th>Phone</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $teacher)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $teacher->document }}</td>
											<td>{{ $teacher->name }}</td>
											<td>{{ $teacher->last_name }}</td>
											<td>{{ $teacher->mail }}</td>
											<td>{{ $teacher->phone }}</td>

                                            <td>
                                                <form action="{{ route('teacher.destroy',$teacher->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('teacher.show',$teacher->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('teacher.edit',$teacher->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $teachers->links() !!}
            </div>
        </div>
    </div>
@endsection
