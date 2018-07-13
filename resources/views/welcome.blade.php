@extends('layouts.app')


@section('content')
<link rel = "stylesheet" href = "css/welcome.css" type = "text/css">

    
        <div class="center jumbotron">
            <div class="text-center">
                <h1>MyCaseへようこそ</h1>
                
                {!! link_to_route('signup.get', '今すぐ登録!', null, ['class' => 'btn btn-lg btn-warning']) !!}                

                <br>
                    <br>
                        {!! link_to_route('men.index', '男性', null, ['class' => 'btn btn-lg btn-primary']) !!}
                
                        {!! link_to_route('women.index', '女性', null, ['class' => 'btn btn-lg btn-danger']) !!}
                    </br>
                </br>
            </div>
        </div>
    
@endsection