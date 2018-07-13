@if(count($carts) == null)
         カートに何も入っていません
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
    
<br>
    <br>
    {!! link_to_route('women.index', '商品一覧に戻る', null, ['class' => 'btn btn-primary btn-lg']) !!}
    
    