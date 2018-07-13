<?php
    $items =App\Item::where('sex', 'W')->get()
    ?>

        
    @foreach($items as $item)
    <img src="{{url($item->image)}}">
    <br>
     
     
     <?php print($item->description) ?>
    @if(Auth::user()->is_carting($item->id)){
        {!! Form::open(['route' => ['carts.discart', $item->id], 'method' => 'delete']) !!}
        {!! Form::submit('カートから外す', ['class' => "btn btn-danger btn-lg"]) !!}
        {!! Form::close() !!}
    
    
    @else
    {!! Form::open(['route' => ['carts.store', $item->id], 'method' => 'store']) !!}
                        {!! Form::submit('カートに追加', ['class' => 'btn btn-primary btn-lg']) !!}
                    {!! Form::close() !!}
    
    
    
    
    @endif
    @endforeach 
    
    {!! link_to_route('carts.index', 'カート一覧', null, ['class' => 'btn btn-primary btn-lg']) !!}
    
    <br>
        <br>{!! link_to_route('carts.welcome', 'ホームに戻る', null, ['class' => 'btn btn-primary btn-lg']) !!}