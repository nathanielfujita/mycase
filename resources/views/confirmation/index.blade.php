<font size="20">最終確認画面</font>

<br>
    <br>
        <font size="5">選択した商品：</font>
            <br>
                @foreach ($carts as $cart)
                 <img src="{{url($cart->image)}}">
                @endforeach
<br>    
    <br>
        <font size="5">選択したプラン：</font>
<br>    
    <p> <?php echo $plan?></p>
        
        
        
        



<br>
    <br>
        <font size="5">選択した宿泊先：</font>
<br>
        <p> <?php echo $hotel?>  </p>
        
        
        
<br>
    {!! link_to_route('payment.index', 'ご注文を確定しお支払い番号の発行へ進む', null, ['class' => 'btn btn-primary btn-lg']) !!}