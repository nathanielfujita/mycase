<link rel="stylesheet" href="css/men.css">
<!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<?php

    $items =App\Item::where('sex', 'F')->get()
    ?>

    <div class= "title">
        <center>=Women's Fashion=</center>
    </div>

<br>
<div id="a">
    @if(Auth::check())    
        @foreach($items as $item)
        <img src="{{url($item->image)}}">
        <br>
         
         
            <?php print($item->description) ?>
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
    
    <br>
        <br>
{!! link_to_route('carts.index', 'カート一覧に進む', null, ['class' => 'btn btn-success btn-lg']) !!}
    
    <br>
        <br>
        {!! link_to_route('carts.welcome', 'ホームに戻る', null, ['class' => 'btn btn-danger btn-sm']) !!}
    
</div>
    

