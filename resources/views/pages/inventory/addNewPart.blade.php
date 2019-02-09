@extends('layout.app')

@section('main-content')

    <div class="row">
        <div class="col-12">
            <div class="card-box">
                {!! Form::open(['action' => 'PartManageController@store','method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('partNo', 'Part No.')}}
                            {{Form::text('partNo', '', ['class' => 'form-control', 'placeholder' => 'Part Number here'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('description', 'Description.')}}
                            {{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('taskType', 'Task Type.')}}
                            {{Form::text('taskType', '', ['class' => 'form-control', 'placeholder' => 'Select Task Type'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('usage', 'Usage.')}}
                            {{Form::text('usage', '', ['class' => 'form-control', 'placeholder' => 'Select Usage Type'])}}
                        </div>
                        <div class="form-group">
                            {{Form::file('picture')}}
                        </div>
                        <hr>
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                        {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

