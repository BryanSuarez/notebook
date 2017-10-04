@extends('layouts.app')

@section('content')
    <div class="container">
        @include('partials.error')
        <div class="row">
            <div class="col-sm-12 col-md-10 col-lg-6">
                {!! Form::open(['url' => 'notes' , 'method' => 'POST']) !!}
                {{csrf_field()}}
                    <div class="form-group">
                        {!! Form::label('name', 'Título') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('body', 'Contenido') !!}
                        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                    </div>
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="form-group">
                        {!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
