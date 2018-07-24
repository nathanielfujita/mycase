<head>
<link rel="stylesheet" href="/css/men.css" type="text/css">
<!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>


<body>
<?php

    $items =App\Item::where('sex', 'M')->get()
    ?>
  
    <div class="title">
        <center><font size="20">=Men's Fashion=</font></center>
           <div class="titlelinks">
            {!! link_to_route('carts.index', 'カート一覧に進む', null, ['class' => 'btn btn-success btn-lg']) !!}
            {!! link_to_route('carts.welcome', 'ホームに戻る', null, ['class' => 'btn btn-danger btn-sm']) !!}
           </div>
    </div>
<br>
<div id="a">
    
    <div class="row">
        <div class="pics">
    @if(Auth::check())
        @foreach($items as $item)
        
       <img src="{{url($item->image)}}">
        <br>
         
            <?php print($item->description); ?>
            @if(Auth::user()->is_carting($item->id))
            {!! Form::open(['route' => ['carts.discart', $item->id], 'method' => 'delete']) !!}
            {!! Form::submit('カートから外す', ['class' => "btn btn-warning btn-md"]) !!}
            {!! Form::close() !!}
         
    
            @else
            {!! Form::open(['route' => ['carts.store', $item->id], 'method' => 'store']) !!}
            {!! Form::submit('カートに追加', ['class' => 'btn btn-primary btn-md']) !!}
            {!! Form::close() !!}
        
        
            @endif
             @endforeach


    @else
    
        @foreach($items as $item)
        <img src="{{url($item->image)}}">
        {!! Form::open(['route' => ['carts.store', $item->id], 'method' => 'store']) !!}
        {!! Form::submit('カートに追加するにはログイン！', ['class' => 'btn btn-primary btn-md']) !!}
        {!! Form::close() !!}
        @endforeach
    @endif
        </div>
    </div>
    
    <br>
        <br>
{!! link_to_route('carts.index', 'カート一覧に進む', null, ['class' => 'btn btn-success btn-lg']) !!}
    
    <br>
        <br>
        {!! link_to_route('carts.welcome', 'ホームに戻る', null, ['class' => 'btn btn-danger btn-sm']) !!}
</div>
</body>
    

