<head>
        <link rel="stylesheet" href="css/cart.css">
<!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- ビューポートの設定 -->
	<meta name="viewport" content="width=device-width,initial-scale=1">        
</head>      
        
        
    <div class="cart ">
            <font size="20">=カート一覧=</font>
        <div class="titlelinks">
                       <span class="return1"> {!! link_to_route('men.index', "Men's Fashion一覧に戻る", null, ['class' => 'btn btn-danger btn-sm']) !!}</span>
                       <span class="return2">{!! link_to_route('women.index', "Women's Fashion一覧に戻る", null, ['class' => 'btn btn-danger btn-sm']) !!}</span>
        </div>
    </div>

<br>
<div id="a"> 
@if(count($carts) == null)
        
    @else
    @foreach ($carts as $cart)
        <img src="{{url($cart->image)}}">
        <div>
        {!! Form::open(['route' => ['carts.discart', $cart->id], 'method' => 'delete']) !!}
        {!! Form::submit('カートから外す', ['class' => "btn btn-warning btn-md"]) !!}
        {!! Form::close() !!}
        </div>
    @endforeach
@endif
  
  
@if(count($carts) == null)
         カートに何も入っていません
    @else
    <br>
        <br>{!! link_to_route('selectplan.index', 'チェックアウトへ進む', ['id' => $cart->id], ['class' => 'btn btn-success btn-lg']) !!}
    @endif
        <br>
            <br>
            <br>{!! link_to_route('men.index', "Men's Fashion一覧に戻る", null, ['class' => 'btn btn-danger btn-sm']) !!}
            <br>
            <div class= "bottomspace">
            <br>{!! link_to_route('women.index', "Women's Fashion一覧に戻る", null, ['class' => 'btn btn-danger btn-sm']) !!}
            </div>
            
</div>    
       
    

