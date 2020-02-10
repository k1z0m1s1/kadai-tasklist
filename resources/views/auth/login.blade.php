@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>ログイン</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(['route' => 'login.post'])!!}
                <div class="form-group">
                    {!! Form::label('email','Email') !!}
                    {!! Form::email('email',old('email'),['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password','Password') !!}
                    {!! Form::password('password',['class' => 'form-control']) !!}
                </div>
                
                <p>{!! Form::submit('ログイン',['class' => 'btn btn-primary btn-block']) !!}</p>
            {!! Form::close() !!}
            
            <p class="mt-2">会員登録はお済みですか？{!! link_to_route('signup.get','新規会員登録') !!}</p>
            
        </div>
    </div>
@endsection