    <font size="20">カート一覧</font>

<br>
@if(count($carts) == null)
        
    @else
    @foreach ($carts as $cart)
        <img src="{{url($cart->image)}}">
        <div>
        {!! Form::open(['route' => ['carts.discart', $cart->id], 'method' => 'delete']) !!}
        {!! Form::submit('カートから外す', ['class' => "btn btn-primary btn-lg"]) !!}
        {!! Form::close() !!}
        </div>
    @endforeach
@endif
    
@if(count($carts) == null)
         カートに何も入っていません
    @else
    {!! link_to_route('selectplan.index', 'チェックアウトへ進む', ['id' => $cart->id], ['class' => 'btn btn-primary btn-lg']) !!}
    @endif
        <br>
            <br>{!! link_to_route('men.index', '男性服商品一覧に戻る', null, ['class' => 'btn btn-primary btn-lg']) !!}
            <br>{!! link_to_route('women.index', '女性服商品一覧に戻る', null, ['class' => 'btn btn-primary btn-lg']) !!}
    
       
    

