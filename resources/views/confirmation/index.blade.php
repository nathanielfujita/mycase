<head>
        <link rel="stylesheet" href="css/cart.css">
<!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- ビューポートの設定 -->
	<meta name="viewport" content="width=device-width,initial-scale=1">        
</head>      

<link rel="stylesheet" href="css/select.css">
<!-- Bootstrap CSS-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="center">
<div class="title">=最終確認画面=</div>

<br>
    <br>
        <font size="5">選択した商品：</font>
        <br>
            <br>
                @foreach ($carts as $cart)
                 <img src="{{url($cart->image)}}">
                @endforeach
<br>    
    <br>
        <br>
        <font size="5">選択したプラン：</font>
<br>  
    <br>
    
    <p> <?php echo $plan?></p>



<br>
    <br>
        <font size="5">選択した宿泊先：</font>
<br>
    <br>
        <p> <?php echo $hotel?>  </p>
        
        
        
<br>
    <br>
    <div class= "bottomspace"> 
    {!! link_to_route('payment.index', 'ご注文を確定しお支払い番号の発行へ進む', null, ['class' => 'btn btn-lg btn-success']) !!}
    </div>
    </div>