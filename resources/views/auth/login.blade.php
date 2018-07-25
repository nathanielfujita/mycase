@extends('layouts.app')
<link rel="stylesheet" href="css/login.css">
@section('content')
    <div class="text-center">
        <h1>ログイン</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'ユーザー名') !!}
                    {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード（６文字以上）') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン', ['class' => 'btn btn-warning btn-block']) !!}
            {!! Form::close() !!}

            <p><font size="8">初めての方は {!! link_to_route('signup.get', 'こちら!') !!}</font></p>
            
            
        </div>
    </div>
@endsection