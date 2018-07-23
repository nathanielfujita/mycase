@extends('layouts.app')
  <link rel="stylesheet" href="css/register.css">
@section('content')
    <div class="text-center">
        <h1>新規登録</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'ユーザー名') !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード（６文字以上）') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード再入力') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('登録', ['class' => 'btn btn-warning btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection